<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Message;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('back.*', function ($view) {
            $view->with('statusCount' , Message::where('status', 'baxilmayib')->count());
        });
    }

}
