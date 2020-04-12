<?php
namespace Vikram\Contact;
use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends ServiceProvider
{
 public function boot(){
   $this->loadRoutesFrom(__DIR__.'/routes/web.php');
   $this->loadViewsFrom(__DIR__.'/views','contact');
   //$this->loadMigrationsFrom(__DIR__.'/databse/migrations');
   $this->publishes([
           __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations'
       ], 'migrations');
 }

 public function register()
 {

 }

}



 ?>
