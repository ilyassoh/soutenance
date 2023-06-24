<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\parametre;


class FooterComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('partitions.footer', function ($view) {
            $parametres = parametre::all();
            $view->with('parametres', $parametres);
        });
    }

    public function register()
    {
        
    }
}