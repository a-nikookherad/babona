<?php

namespace Database\Seeders;

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
                ->updateOrCreate($user, $user);
        }
    }

    private function users()
    {
        return [
            [
                "name" => "admin",
                "family" => "admin",
                "phone_number" => "09121111111",
                "email" => "administrator@babona.com",
                "email_verified_at" => now()->format("Y:m:d H:i:s"),
                "password" => Hash::make("babona_admin_123"),
            ],
        ];
    }
}
