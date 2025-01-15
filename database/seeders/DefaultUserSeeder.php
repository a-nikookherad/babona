<?php

namespace Database\Seeders;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users() as $user) {
            User::query()
                ->updateOrCreate(
                    ["email" => $user["email"], "phone_number" => $user["phone_number"]],
                    $user
                );
        }
        //assign users to merchants
        $babonaUsers = User::query()
            ->whereIn("name", [
                "ali",
                "kimia",
                "alireza",
            ])->get();
        $babonaMerchant = Merchant::query()
            ->where("name", "babona")
            ->first();
        foreach ($babonaUsers as $babonaUser) {
            $babonaUser->merchants()->sync([
                $babonaMerchant->id => [
                    "role" => "admin",
                    "created_at" => now(),
                    "updated_at" => now(),
                ]
            ]);
        }

        $parsianUsers = User::query()
            ->whereIn("name", [
                "akbar",
                "zahra",
            ])->get();
        $parsianMerchant = Merchant::query()
            ->where("name", "parsian_posh")
            ->first();
        foreach ($parsianUsers as $parsianUser) {
            $parsianUser->merchants()->sync([
                $parsianMerchant->id => [
                    "role" => "admin",
                    "created_at" => now(),
                    "updated_at" => now(),
                ]
            ]);
        }
    }

    private function users()
    {
        return [
            [
                "name" => "business",
                "family" => "admin",
                "phone_number" => "09121111111",
                "email" => "super_admin@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_super_admin"),
                "role" => "super_admin"
            ],
            [
                "name" => "ali",
                "family" => "nikookherad",
                "phone_number" => "09375727006",
                "email" => "admin@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_ali"),
                "role" => "admin"
            ],
            [
                "name" => "akbar",
                "family" => "joftan",
                "phone_number" => "09191528636",
                "email" => "akbar@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_akbar"),
                "role" => "admin"
            ],
            [
                "name" => "kimia",
                "family" => "mosavi",
                "phone_number" => "09365208668",
                "email" => "kimia@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_kimia"),
                "role" => "admin"
            ],
            [
                "name" => "alireza",
                "family" => "abbasi",
                "phone_number" => "09360551701",
                "email" => "alireza@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_alireza"),
                "role" => "admin"
            ],
            [
                "name" => "zahra",
                "family" => "ghanbari",
                "phone_number" => "09198528034",
                "email" => "zahra@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_zahra"),
                "role" => "admin"
            ],
        ];
    }
}
