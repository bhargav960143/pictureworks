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
