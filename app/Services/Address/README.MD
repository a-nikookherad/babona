# Address

## What is Address doing?

This package save all entities addresses and retrieve that easily.

### What does Address need to run?

__First you need to run the migrations:__

```shell
php artisan migrate
```

__Then you need to run the seeder:__

```shell
php artisan db:seed --class=Address\Seeders\DatabaseSeeder
```

__Then you need to add relationship for your entities in your service provider:__

```injectablephp
User::resolveRelationUsing("addresses", function ($addresses) {
    return $addresses->morphMany(Address::class, "addressable");
});
```

### How does Address work?

For use the package you just need to call the Addresses Facade like this:

```php
Address::save($model,array $info);
Address::getStatesWithCities();
Address::getStates();
Address::getCitiesByStateId($state_id);
```

There are 4 method for call

1. __save__ method is for store the address for your model(for example: user).
2. __getStatesWithCities__ method is for get all states with all related cities.
3. __getStates__ method is for get all states.
4. __getCitiesByStateId__ method is for get all cities of a state
