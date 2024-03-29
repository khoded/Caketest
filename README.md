# CakePHP CRUD Application 

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Solutions and Concerns
The project was initially meant to be built with Cakephp v2.5.4, the current version is 3.8.0, Hpwever during my implementation my challenge was having to use this version in my development environment, Noteably the cakephp version was unable to go live due to my dev env running a higher PHP version 7.0, to resolve this issue i will have to downgrade which might risk other applications running on this service. I took the intiative of using the latest version, Fortunately i was able to complete the majority of the tasks specified but a long time abscence in this environment with issues getting familiar with the framework took longer time than expected unfortunately I was unable to make the auth work as expected even though it was built.The development environment used  for a seamless env 
is Bitnami LAMP(Linux Apache Mysql Php) stack. Any OS version of this stack is highly recommended for anyone trying to test for optimal results.

## 3rd party Library
Friendsofcake for csv view 

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.

