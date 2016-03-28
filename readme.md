

## Tools used
* [Bootstrap 3.3.5](http://getbootstrap.com)

* [Font Awesome Icons](https://fortawesome.github.io/Font-Awesome/)

* [Laravel PHP Framework](https://laravel.com/)

## How to install
1. **Download** the repository as ZIP and extract it in your **local** server directory
   Ex: For XAMPP it would be /htdocs/laravel/
2. **Enter** your command prompt and run `composer install`
3. **Run** `composer update`
4. **Rename** the `.env.example` file to `.env` (if it doesn't exist already)
5. **Run** `php artisan key:generate`, **copy** the key into `.env` after `APP_KEY=`
6. **Create** a database named Taxi (name, login, password can be changed in `.env` file)
6. **Import** the Dabase `export.sql`
6. Now the project should be ready to go
7. The default password to the /admin page is "12345"

## Features Provided
* The main page listing general information about the site.
* /order page offering the user the possibility to leave an order.
* /contacts page that lists all the needed contacts.
* /comments page where users can leave their opinion about the service.
* /about page providing short information about the team.
* Telephone hyperlinks that allow the user to call the number right away.

* The site also has /admin page, where you can login and manipulate with the content on the pages listed above:
  * Moving, completing, deleting user orders.
  * Blocking/Unblocking a certain user.
  * Deleting a certain comment.
  * Adding, editing, deleting the contacts list.
  * Adding and deleting a team-member, as well as editing it's information and photo.
  * Changing the password (which is "12345" by default).

## Elementary functionality included
* Server and client-side coding
* MVC relationships
* Working with Blade templates
* Ajax requests and JQuery usage (colleting data, toggling, event-listening)
* Simple authentification and login
* Working and processing forms and requests
* Working with a MySQL database (adding, deleting, updating)
* Usage of PHP language primitives
* Picture loading to the server
* Full mobile and desktop support
* Bootstrap CSS, Font Awesome CSS, written CSS
* HTML5 usage (metadata, titles)

##Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
