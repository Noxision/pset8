#Prerequisites

Before copying the site directory, you will need to install a service capable of
raising a local server on your local machine with a MySQL database (e.g. XAMPP, LAMPP).

Second you need PHP 7;

```
https://www.apachefriends.org/ru/index.html
```

At last, you might to copy project from git repo to your local server root directory.

#Settings for DB

To enter the database, you must have 'admin' user with all rights
on localhost and password 'secret'.

Create the database on your local server with SQL query :

```
CREATE DATABASE IF NOT EXISTS `pset8` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

#Settings for Laravel

Open terminal window in your project directory.

Make next simple steps, at first put command :

```
composer install
```

Next step you'll generate key for your application:

```
php artisan key:generate
```

At last you need to do some migrations:

```
php artisan migrate --seed
```

#Administrator

```
email: admin@gmail.com
```
```
password: admin
```

#Built With

PHP,
MySQL,
Laravel 5.4

#Authors

Makcym Kocherzhenko

#License

FREE
