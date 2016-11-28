<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use View;
use Auth;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age', function ($expression){
           $data = json_decode($expression);
           $year = $data[0];
           $month = $data[1];
           $day = $data[2];
           $age = Carbon::createFromDate($year, $month, $day)->age;
            return "<?= $age; ?>";
        });
        Blade::directive('sayHello', function($expression){
            return "<?= 'Hello ' .  $expression; ?>";
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age = Carbon::createFromDate('1987',2,14)->age;      
        View::share('age', $age);
        View::share('myname', 'SM Farhad Hossain');
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }
}
