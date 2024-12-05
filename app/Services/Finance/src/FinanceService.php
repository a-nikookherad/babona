<?php

namespace Finance;


use App\Services\Finance\src\Traits\AccountTrait;
use App\Services\Finance\src\Traits\BalancesTrait;
use App\Services\Finance\src\Traits\WalletTrait;
use Finance\Entities\Models\Transaction;
use Finance\Exceptions\DoNotHaveEnoughCreditException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FinanceService
{
    use WalletTrait, AccountTrait, BalancesTrait;

    public function credit($object): array
    {
        $accounts = $object->accounts();
        $balances = [];
        foreach ($accounts as $account) {
            $balances[$account->wallt->name] = $account->balances;
        }

        return $balances;
    }

    public function transfer($fromObject, $toObject, $wallet, $amount, $forObject = null)
    {
        $fromAccount = $fromObject->accounts->where("wallet_id", $wallet->id)->first();
        $fromBalance = $fromAccount->balance;

        if ($fromBalance->credit < $amount) {
            throw(new DoNotHaveEnoughCreditException("do not have enough credit"));
        }

        try {
            DB::beginTransaction();

            $fromBalance->credit = $fromBalance->credit - $amount;
            $fromBalance->save();

            $toAccount = $toObject->accounts->where("wallet_id", $wallet->id)->first();
            if ($wallet->transaction_accept_manual == true) {
                $transaction = new Transaction();
                $transaction->from_account_id = $fromAccount->id;
                $transaction->to_account_id = $toAccount->id;
                $transaction->is_done = false;
                $transaction->amount = $amount;
                $transaction->uuid = Str::uuid()->toString();
                $forObject->transactions()->save($transaction);
                DB::commit();
                return true;
            }
            $toBalance = $toAccount->balance;
            $toBalance->credit = $toBalance->credit + $amount;
            $toBalance->save();

            $transaction = new Transaction();
            $transaction->from_account_id = $fromAccount->id;
            $transaction->to_account_id = $toAccount->id;
            $transaction->amount = $amount;
            $transaction->uuid = Str::uuid()->toString();
            $forObject->transactions()->save($transaction);

            DB::commit();
            return true;
        } catch (\Throwable $exception) {
            DB::rollBack();
        }
    }

    public function reverseTransfer($fromObject, $toObject, $wallet, $amount, $forObject = null)
    {
        $fromAccount = $fromObject->accounts->where("wallet_id", $wallet->id)->first();
        $fromBalance = $fromAccount->balance;

        if ($fromBalance->credit < $amount) {
            throw(new DoNotHaveEnoughCreditException("do not have enough credit"));
        }

        try {
            DB::beginTransaction();

            $fromBalance->credit = $fromBalance->credit - $amount;
            $fromBalance->save();

            $toAccount = $toObject->accounts->where("wallet_id", $wallet->id)->first();
            if ($wallet->transaction_accept_manual == true) {
                $transaction = new Transaction();
                $transaction->from_account_id = $fromAccount->id;
                $transaction->to_account_id = $toAccount->id;
                $transaction->is_done = false;
                $transaction->amount = $amount;
                $transaction->uuid = Str::uuid()->toString();
                $forObject->transactions()->save($transaction);
                DB::commit();
                return true;
            }
            $toBalance = $toAccount->balance;
            $toBalance->credit = $toBalance->credit + $amount;
            $toBalance->save();

            $transaction = new Transaction();
            $transaction->from_account_id = $fromAccount->id;
            $transaction->to_account_id = $toAccount->id;
            $transaction->amount = $amount;
            $transaction->uuid = Str::uuid()->toString();
            $forObject->transactions()->save($transaction);

            DB::commit();
            return true;
        } catch (\Throwable $exception) {
            DB::rollBack();
        }
    }

    public function transaction($transaction_uuid)
    {
        return Transaction::query()
            ->where("uuid", $transaction_uuid)
            ->first();
    }

    public function enquiry($object, $wallet, $fromDateTime, $toDateTime)
    {
        $account = $object->accounts()->where("wallet_id", $wallet->id)->first();
        return Transaction::query()
            ->where("from_account_id", $account->id)
            ->orWhere("to_account_id", $account->id)
            ->get();
    }

}
