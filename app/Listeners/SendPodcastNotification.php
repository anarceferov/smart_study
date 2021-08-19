<?php

namespace App\Listeners;

use App\Events\PodcastProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Session\Session;
use Illuminate\Queue\InteractsWithQueue;

class SendPodcastNotification
{

    public function __construct()
    {
       
    }

    public function handle(PodcastProcessed $event)
    {
        Session::flush();
    }
}
