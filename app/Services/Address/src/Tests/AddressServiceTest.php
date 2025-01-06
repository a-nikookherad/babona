<?php

namespace Address\Tests;

use Address\Address;
use App\Models\User;
use Tests\TestCase;

class AddressServiceTest extends TestCase
{
//    use MigrationTrait;
    public function test_address_service(): void
    {
        $states = Address::getStatesWithCities();
        $this->assertDatabaseHas($states->first());
        $this->assertDatabaseHas($states->first()->cities->first());

        $states = Address::getStates();
        $this->assertDatabaseHas($states->first());

        $cities = Address::getCitiesByStateId($states->first()->id);
        $this->assertDatabaseHas($cities->first());

        $user = User::factory()->make();
        $addressInfo = \Address\Entities\Models\Address::factory()->make();
        $address = Address::save($user, $addressInfo->toArray());
        $this->assertDatabaseHas($address);

        $this->assertNotEmpty($user->addresses->first());
    }
}
