# Pictureworks
* Access repository using following instruction
    ```
    git clone git@github.com:bhargav960143/pictureworks.git
    ```
* Setup fresh laravel copy
    ```
    composer global require laravel/installer
    ```
    ```
    laravel new
    ```
* Generate application key
    ```
    php artisan key:generate
    ```
* Database create ``pictureworks``

* After .env configure
    ```
    php artisan cache:clear
    php artisan config:cache
    ```
* Migration create 
    ```
    php artisan make:migration create_users_table
    ```
* Database seeder create
    ```
    php artisan make:seeder UsersTableSeeder
    ```    
* Table migration  
    ```
    php artisan migrate --path=/database/migrations/2019_11_25_045751_create_users_table.php
    ```
* Table seed
    ```
    php artisan db:seed --class=UsersTableSeeder
    ```
* Create UsersController 
    ```
    php artisan make:controller UserController
    ```
* Create Artisan Command  
    ```
    php artisan make:command Users
    ```
#1) GET Method
* Get user data using user id 
    
    ```
    URL : http://127.0.0.1:8000/user/1
    ```
#2) Post Method
* You can use Postman or any other tools for test 
    ```
    URL : http://127.0.0.1:8000/api/user/update
    ```
  
* <b>Parameters</b>
    - id
    - comments
    - password

* <b>Example:</b>

    ```
    { "id":"1", "comments":"ABC", "password":"720DF6C2482218518FA20FDC52D4DED7ECC043AB" }
    ```

#3) Artisan Command
* Create Command for update user data
    ``` 
    php artisan user:update {id} {comments} 
    ```

* <b>Example:</b>
    ```
    php artisan user:update 1 XYZ
    ```
