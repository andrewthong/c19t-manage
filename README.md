# c19t-manage

Separated and cleaned-up covid19tracker.ca manage utility from version 1 of the project.

> :warning: This utility is meant to pair with the database schema for the COVID-19 Tracker Canada project.

## Prerequisites

PHP webserver.

> :exclamation: There is no authentication out-of-the-box. It is your responsiblity to secure it.

## Installation

1. Checkout this project to server
2. Configure webserver (Apache, Nginx etc.)
3. Configure authentication as required
4. Copy `env.example.php` to `env.php`
5. Update database credentials in `env.php`
6. (Optional) Install adminer `wget https://www.adminer.org/latest-mysql-en.php -O adminer.php` for additional database management
