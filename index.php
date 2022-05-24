<?php

/**  ON TABLE */
/*
FORMATING DATE -->  date('l jS \\of F Y h:i:s A'), // Sunday 8th of May 2022 06:33:32 PM

MAKING A SINGLE MIGRATION --> php artisan migrate --path database\migrations\2022_05_09_023917_alter_post_table.php

CREATING A MODEL WITH MIGRATION --> php artisan make:model Testimony --migration

CREATING A CONTROLLER WITH CRUD METHODS --> php artisan make:controller TestimonyController --api
CREATING A CONTROLLER WITH CRUD METHODS, REQUEST AND ATTACHING A MODEL
 php artisan make:controller AlbumController --model=Album --requests --api

*/

/** SHARED SERVER */

/*
 TO REDIRECT LARAVEL SITE TO YOUR PUBLIC_HTML IN SHARED HOSTING USE
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
  /*  public function register()
    {
        $this->app->bind('path.public', function() {
          return base_path().'/public_html';
        });
    }
 */


