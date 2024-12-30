<?php

namespace Finance\Traits;

use Finance\Entities\Repositories\TransactionRepo;
use Finance\Entities\Models\Transaction;
use Finance\Exceptions\DoNotHaveEnoughCreditException;
use Illuminate\Support\Str;

trait TransactionTrait
{
    public function transfer($fromAccount, $toAccount, $amount, $description = "")
    {
        $wallet = $fromAccount->wallet;

        //Decrease credit from source account
        $this->decreaseCredit(account: $fromAccount, amount: $amount);

        $transaction = $this->createTransactionObject(
            fromAccountId: $fromAccount->id,
            toAccountId: $toAccount->id,
            amount: $amount,
            description: $description
        );
        if ($wallet->transaction_accept_manual == true ||
            $wallet->maximum_transaction_amount_needs_to_approve < $amount) {
            $transaction->treasury_account_id = $wallet->treasuryAccount->id;
            $transaction->is_done = false;
            $transaction->save();
        } else {
            $transaction->is_done = true;
            $transaction->save();

            //Increase credit from destination account
            $this->increaseCredit(account: $toAccount, amount: $amount);
        }

        return $transaction;
    }

    public function acceptTransaction($transaction)
    {
        $this->increaseCredit($transaction->toAccount, $transaction->amount);

        $transaction->is_done = true;
        $transaction->save();
    }

    public function reverseTransfer($transaction, $amount = null, $description = null)
    {
        $amount = $amount ?? $transaction->amount;

        $this->increaseCredit(account: $transaction->fromAccount, amount: $amount);

        $reverseTransaction = $this->createTransactionObject(
            fromAccountId: $transaction->toAccount->id,
            toAccountId: $transaction->fromAccount->id,
            amount: $amount,
            description: $description
        );
        $reverseTransaction->reverse_transaction_id = $transaction->id;
        $reverseTransaction->is_done = (boolean)$transaction->is_done;
        $reverseTransaction->uuid = Str::uuid()->toString();
        $reverseTransaction->save();

        $this->decreaseCredit(account: $transaction->toAccount, amount: $amount);

        return $reverseTransaction;
    }

    public function transaction($transaction_uuid)
    {
        return TransactionRepo::getTransactionByUuid($transaction_uuid);
    }

    public function enquiry($object, $wallet, $fromDateTime, $toDateTime)
    {
        /*        $account = $object->accounts()->where("wallet_id", $wallet->id)->first();
                return Transaction::query()
                    ->where("from_account_id", $account->id)
                    ->orWhere("to_account_id", $account->id)
                    ->get();*/
    }

    private function createTransactionObject($fromAccountId, $toAccountId, $amount, string $description): Transaction
    {
        $transaction = new Transaction();
        $transaction->from_account_id = $fromAccountId;
        $transaction->to_account_id = $toAccountId;
        $transaction->amount = $amount;
        $transaction->description = $description;
        $transaction->uuid = Str::uuid()->toString();
        return $transaction;
    }

    public function decreaseCredit($account, $amount): void
    {
        if (!$account->can_be_minus && $account->balance->credit < $amount) {
            throw(new DoNotHaveEnoughCreditException("do not have enough credit"));
        }
        $account->balance->credit = $account->balance->credit - $amount;
        $account->balance->save();
    }

    public function increaseCredit($account, $amount): void
    {
        $balance = $account->balance;
        $balance->credit = $balance->credit + $amount;
        $balance->save();
    }
}
