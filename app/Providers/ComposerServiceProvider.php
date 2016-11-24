<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider {
    public function boot() {
        View::creator(['pages.profile','pages.settings'], 'App\Http\ViewComposers\ProfileComposer');
        //View::composer('pages.profile', 'App\Http\ViewComposers\ProfileComposer');   
    }
    
    public function register() {
        //
    }

}





















