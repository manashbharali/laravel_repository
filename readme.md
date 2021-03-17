##  Installation Process

Create a database "laravel_repository"

``` 
	git clone https://github.com/manashbharali/laravel_repository.git

	cd/laravel_repository

	composer install

```
> Rename the example.env to .env
``` 
//To generate the  table migration
	php artisan migrate

//To generate the  test data for user and cutomer  
	php artisan db:seed

//To start the serve
	php artisan serve

```
### Routes list

-	List of customer http://127.0.0.1:8000/customers
-	To delete a customer http://127.0.0.1:8000/customers/delete/{id}