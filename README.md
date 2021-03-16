<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel

This application is called "Cable UNET" and it is a project for the Programming II course. This project was made with
Laravel, which is php framework, and it also uses MySQL as database and css framework's Bootstrap. 

## Hosting

This app was deeployed on [Heroku](https://www.heroku.com/) servers and the MySQL database instance is currently running in [Clever Cloud](https://www.clever-cloud.com)

* Visit the app at: [Cable UNET](http://cable-unet.herokuapp.com/)

## How To Run This Project (On Linux)

1- Clone this project, on your local machine:
```bash
$ git clone https://github.com/jefferson10147/cable-UNET
```

2- Install composer into your project folder:
```bash
$ composer install 
```

3- Create your .env file:
```bash
$ cat .env.excample >> .env

```

4- Put your database configuration into .env file, just modifying these fields:
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=cable_unet
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password
```

5- Generate your app keys:
```
$ php artisan key:generate
```

6- Make the database migrations:
```
$ php artisan migrate
```

7- Run app:
```
$ php artisan serve
```

You can import a test database with test records using database.sql file, it's located in root directory
```
$ mysql -u root -p < database.sql
```
