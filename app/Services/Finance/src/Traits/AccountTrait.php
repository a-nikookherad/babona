<?php

namespace Finance\Traits;

use Finance\Entities\Repositories\WalletRepo;
use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;

trait AccountTrait
{
    public function credit($account)
    {
        return $account->balance->credit;
    }

    public function account($object, $wallet = "")
    {
        if (!$wallet instanceof (WalletRepo::getInstance())) {
            $wallet = WalletRepo::getByNameOrDefault($wallet);
        }

        return $object->accounts->where("wallet_id", $wallet->id)->first();
    }

    public function createAccounts($object, $type = "customer")
    {
        $wallets_id = WalletRepo::getIds();
        foreach ($wallets_id as $wallet_id) {
            $account = new Account();
            $account->wallet_id = $wallet_id;
            $account->type = $type;
            $object->accounts()->save($account);
        }
        return $object;
    }

    /**
     * @param Model $object
     * @param string|null $type
     * @param mixed|null $wallet
     * @param boolean|null $canBeMinus
     * @return void
     */
    public function createAccount($object, ?string $type = "customer", mixed $wallet = null, ?bool $canBeMinus = false): void
    {
        if (!$wallet instanceof (WalletRepo::getInstance())) {
            $wallet = WalletRepo::getByNameOrDefault($wallet);
        }
        $account = new Account();
        $account->wallet_id = $wallet->id;
        $account->type = $type;
        $account->can_be_minus = $canBeMinus;
        $object->accounts()->save($account);
    }
}
