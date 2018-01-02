[Origin Project](https://wrapbootstrap.com/theme/inspinia-responsive-admin-theme-WB0R5L90S)

This is only a demo!

If you're only going to study these source code, be free to view them.

If you want to deploy or use it (especially on commercial), Please purchase $36 for it on {wrap}Bootstrap.

All rights are reserved by the [owner](https://wrapbootstrap.com/user/WebAppLayers) of this project.


# Laravel Inspinia
Laravel Package for integrating Inspinia template and this package is Laravel Mix friendly. Currently this package can be integrated easily only on fresh installation.

# Installation
```bash
composer require atnic/laravel-inspinia
```
If you are using Laravel 5.5 above skip this step, but if aren't then add this line on ```config/app.php```, on  ```providers```
```php
'providers' => [
  ...
  Atnic\Inspinia\Providers\AppServiceProvider::class,
  ...
]
```
And then run,
```bash
php artisan make:inspinia
```
Let's see what we've install. First, make sure that you already ran ```php artisan migrate``` command, then do
```bash
php artisan serve
```
Viola! You've running a Laravel site using Inspinia.

For more information on command
```bash
php artisan make:inspinia --help
```

# Usage
This package provides view for auth and app. Take a look at ```resources/views/layouts/app.blade.php```.

In this file you can extends global section like user name, avatar, breadcrumbs, and menu.

To extends menu add this in ```app.blade.php```
```blade
@section('sidebar-menu')
<ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
  <li class="active">
    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
  </li>
</ul>
@endsection
```

To extends breadcrumbs add this
```blade
@section('breadcrumbs')
@include('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection
```

This package give you free of choice to use any Laravel Package for Menu and Breadcrumb. We recommend [spatie/laravel-menu](https://github.com/spatie/laravel-menu) or [lavary/laravel-menu](https://github.com/lavary/laravel-menu), and [davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs).

Any new created page should extends this view.
```blade
@extends('layouts.app')

// Your blade here
```

# Configuration and Views Customization
## Config
To publish this package config to your app config run
```bash
php artisan vendor:publish --provider="Atnic\Inspinia\Providers\AppServiceProvider" --tag="config"
```
## Views
To publish this package views so you can customize on your own run
```bash
php artisan vendor:publish --provider="Atnic\Inspinia\Providers\AppServiceProvider" --tag="views"
```

# Next Step
First of all, you should understand how to use [Laravel Mix](https://laravel.com/docs/mix).

Inspinia need some package on npm. First you need to run
```bash
npm install
```

Install Inspinia needed package from npm
```bash
npm install --save-dev animate.css font-awesome icheck jquery-slimscroll metismenu pace-js
```

Run Laravel Mix command
```bash
npm run development
```
or use ```production``` minimize output
```bash
npm run production
```

Then have a good look on these files
- ```webpack.mix.js```
- ```resources/assets/js/inspinia.js```
- ```resources/assets/js/auth.js```
- ```resources/assets/sass/inspinia.scss```
- ```resources/assets/sass/auth.scss```

Happy experimenting!
