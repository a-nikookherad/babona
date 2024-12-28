<?php

namespace Finance\Traits;

use Finance\Entities\Repositories\WalletRepo;
use Illuminate\Database\Eloquent\Model;

trait WalletTrait
{

    public function createWallet(array $walletInfo, array $classes = [])
    {
        if (isset($walletInfo["is_default"]) && WalletRepo::getByNameOrDefault()) {
            throw(new \Exception("default wallet is already exists"));
        }
        $wallet = WalletRepo::create($walletInfo);

        //check which objects(user,merchant,...) needs account
        foreach ($classes as $class) {
            /**
             * @var Model $class
             */
            $objects = $class::query()
                ->get();
            foreach ($objects as $object) {
                $this->createAccount($object, $wallet);
            }
        }
        return $wallet;
    }

    public function wallets()
    {
        return WalletRepo::all();
    }
}
