#Package name
##What is the Package doing:
This package make for...

###What does Package need to run:
__First you need to run the migrations__
```shell
php artisan migrate --path=
```

__Then you need to run the seeders__
```shell
php artisan db:seed --class=
```

###How does Package work:
__How does Package work:__

For use the package you just need to call the Facade name of package like this:
```php
Package::run();
```
