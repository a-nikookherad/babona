<?php

namespace Finance;


use App\Services\Finance\src\Traits\AccountTrait;
use App\Services\Finance\src\Traits\BalancesTrait;
use App\Services\Finance\src\Traits\WalletTrait;
use Finance\Entities\Models\Transaction;
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

    public function transfer($fromObject, $toObject, $wallet, $amount)
    {
        $fromAccount = $fromObject->accounts->where("wallet_id", $wallet->id)->first();
        $fromBalance = $fromAccount->balance;

        if ($fromBalance->credit < $amount) {
            return "you dont have enough credit";
        }

        try {
            DB::beginTransaction();

            $fromBalance->credit = $fromBalance->credit - $amount;
            $fromBalance->save();

            $toAccount = $toObject->accounts->where("wallet_id", $wallet->id)->first();
            if ($wallet->transaction_accept_manual == true) {
                $treasuryAccount = $wallet->treasuryAccount->first();
                $treasuryBalance = $treasuryAccount->balance;
                $treasuryBalance->credit = $treasuryBalance->credit + $amount;
                $treasuryBalance->save();
                Transaction::query()
                    ->create([
                        "from_account_id" => $fromAccount->id,
                        "to_account_id" => $treasuryAccount->id,
                        "amount" => $amount,
                        "uuid" => Str::uuid()->toString(),
                    ]);
                Transaction::query()
                    ->create([
                        "from_account_id" => $treasuryAccount->id,
                        "to_account_id" => $toAccount->id,
                        "is_done" => false,
                        "amount" => $amount,
                        "uuid" => Str::uuid()->toString(),
                    ]);
            } else {
                $toBalance = $toAccount->balance;
                $toBalance->credit = $toBalance->credit + $amount;
                $toBalance->save();

                Transaction::query()
                    ->create([
                        "from_account_id" => $fromAccount->id,
                        "to_account_id" => $toAccount->id,
                        "amount" => $amount,
                        "uuid" => Str::uuid()->toString(),
                    ]);
            }
            DB::commit();
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
