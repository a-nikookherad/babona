<?php

namespace Finance\Providers;

use App\Models\Merchant;
use App\Models\User;
use Cashier\Entities\Models\Bank;
use Finance\Entities\Models\Account;
use Finance\Entities\Models\Wallet;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Loyalty\Entities\Models\Campaign;

class FinanceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        // todo make dynamic relationship for user and merchant and campaign
        $this->defineServiceRelationship();

        $this->loadMigrationsFrom(__DIR__ . "/../Database/Migrations");

        Relation::enforceMorphMap([
            'wallet' => Wallet::class,
            'account' => Account::class,
        ]);
    }

    private function defineServiceRelationship(): void
    {
        User::resolveRelationUsing("accounts", function ($user) {
            return $user->morphMany(Account::class, "accountable");
        });
        Merchant::resolveRelationUsing("accounts", function ($merchant) {
            return $merchant->morphMany(Account::class, "accountable");
        });
        Campaign::resolveRelationUsing("accounts", function ($campaign) {
            return $campaign->morphMany(Account::class, "accountable");
        });
        Bank::resolveRelationUsing("accounts", function ($bank) {
            return $bank->morphMany(Account::class, "accountable");
        });
    }
}

