<?php

namespace App\Providers;

use App\Models\Merchant;
use App\Models\User;
use Finance\Entities\Models\Account;
use Illuminate\Support\ServiceProvider;
use Production\Entities\Models\Basket;
use Production\Entities\Models\Product;
use Production\Entities\Models\ProductDetail;

class RelationshipServiceProvider extends ServiceProvider
{
    /**
     * Register relations.
     */
    public function register(): void
    {
        $this->HandleRelationshipsWithFinanceService();

        $this->handleRelationsWithProductionService();
    }


    private function handleRelationsWithProductionService(): void
    {

        //relation between merchant and products
        Merchant::resolveRelationUsing("products", function ($merchant) {
            return $merchant->belongsToMany(Product::class, "product_details", "merchant_id", "product_id");
        });
        Product::resolveRelationUsing("merchants", function ($product) {
            return $product->belongsToMany(Merchant::class, "product_details", "product_id", "merchant_id");
        });
        ProductDetail::resolveRelationUsing("merchant", function ($productDetail) {
            return $productDetail->belongsTo(Merchant::class, "merchant_id");
        });

        //relation between user and basket
        Basket::resolveRelationUsing("user", function ($basket) {
            return $basket->belongsTo(User::class, "user_id");
        });
    }

    private function HandleRelationshipsWithFinanceService(): void
    {
        User::resolveRelationUsing("accounts", function ($accounts) {
            return $accounts->morphMany(Account::class, "accountable");
        });
        Merchant::resolveRelationUsing("accounts", function ($merchant) {
            return $merchant->morphMany(Account::class, "accountable");
        });
        /*        Campaign::resolveRelationUsing("accounts", function ($campaign) {
                    return $campaign->morphMany(Account::class, "accountable");
                });*/
    }
}
