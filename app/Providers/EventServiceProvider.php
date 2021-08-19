<?php

namespace App\Providers;

use App\Events\PodcastProcessed;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];


    public function boot()
    {
        Event::listen(
            PodcastProcessed::class,
            SendPodcastNotification::class, 'handle',
        );
    
        Event::listen(function (PodcastProcessed $event) {
            //
        });
    }
}
