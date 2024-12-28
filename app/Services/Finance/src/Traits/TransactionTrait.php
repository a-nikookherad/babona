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
        $this->decreaseCredit($fromAccount, $amount);

        $transaction = $this->createTransactionObject($fromAccount->id, $toAccount->id, $amount, $description);
        if ($wallet->transaction_accept_manual == true || $wallet->maximum_transaction_amount_needs_to_approve < $amount) {
            $transaction->treasury_account_id = $wallet->treasuryAccount->id;
            $transaction->is_done = false;
            $transaction->save();
        } else {
            $transaction->save();

            //Increase credit from destination account
            $this->increaseCredit($toAccount, $amount);
        }

        return $transaction;
    }

    public function acceptTransaction($transaction)
    {
        $this->increaseCredit($transaction->toAccount, $transaction->amount);

        $transaction->is_done = true;
        $transaction->save();
    }

    public function reverseTransfer($transaction, $description = null)
    {
        $wallet = $transaction->fromAccount->wallet;
        if ($wallet->transaction_accept_manual == true) {
            $reverseTransaction = new Transaction();
            $reverseTransaction->from_account_id = $wallet->treasuryAccount->id;
            $reverseTransaction->to_account_id = $transaction->fromAccount->id;
            $reverseTransaction->amount = $transaction->amount;
            $reverseTransaction->reverse_transaction_id = $transaction->id;
            $reverseTransaction->is_done = $transaction->is_done;
            $reverseTransaction->uuid = Str::uuid()->toString();
            $reverseTransaction->description = $description;
            $reverseTransaction->save();
        }
        $reverseTransaction = new Transaction();
        $reverseTransaction->from_account_id = $transaction->toAccount->id;
        $reverseTransaction->to_account_id = $transaction->fromAccount->id;
        $reverseTransaction->amount = $transaction->amount;
        $reverseTransaction->reverse_transaction_id = $transaction->id;
        $reverseTransaction->is_done = $transaction->is_done;
        $reverseTransaction->uuid = Str::uuid()->toString();
        $reverseTransaction->description = $description;
        $reverseTransaction->save();

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
