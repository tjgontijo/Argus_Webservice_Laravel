composer require owen-it/laravel-auditing
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="migrations"

composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"

composer require barryvdh/laravel-cors
php artisan vendor:publish --provider="Barryvdh\Cors\ServiceProvider"

composer require laravel/passport
php artisan vendor:publish --tag=passport-migrations
php artisan passport:install --force
php artisan passport:keys --force

php artisan make:controller /Admin/GenderController -r
php artisan make:model Models/Admin/Gender -m
php artisan make:seeder GendersSeeder

php artisan make:controller /Admin/BreedController -r
php artisan make:model Models/Admin/Breed -m
php artisan make:seeder BreedsSeeder

php artisan make:controller /Admin/OrientationController -r
php artisan make:model Models/Admin/Orientation -m
php artisan make:seeder OrientationsSeeder

php artisan make:controller /Admin/EmailTypeController -r
php artisan make:model Models/Admin/EmailType -m
php artisan make:seeder EmailTypesSeeder

php artisan make:controller /Admin/EmailController -r
php artisan make:model Models/Admin/Email -m

php artisan make:controller /Admin/PhoneTypeController -r
php artisan make:model Models/Admin/PhoneType -m
php artisan make:seeder PhoneTypesSeeder

php artisan make:controller /Admin/PhoneController -r
php artisan make:model Models/Admin/Phone -m

php artisan make:controller /Admin/AddressTypeController -r
php artisan make:model Models/Admin/AddressType -m
php artisan make:seeder AddressTypesSeeder

php artisan make:controller /Admin/AddressController -r
php artisan make:model Models/Admin/Address -m

php artisan make:controller /Admin/UserController -r
php artisan make:model Models/Admin/User -m

php artisan make:controller /Admin/UserInfoController -r
php artisan make:model Models/Admin/UserInfo -m

php artisan make:controller /Admin/ClassPhoneController -r
php artisan make:model Models/Admin/ClassPhone -m

php artisan make:controller /Admin/ClassEmailController -r
php artisan make:model Models/Admin/ClassEmail -m

php artisan make:controller /Admin/ClassAddressController -r
php artisan make:model Models/Admin/ClassAddress -m

php artisan make:controller /Admin/InstagramController -r
php artisan make:model Models/Admin/Instagram -m

php artisan make:controller /Admin/InstagramUserController -r
php artisan make:model Models/Admin/InstagramUser -m