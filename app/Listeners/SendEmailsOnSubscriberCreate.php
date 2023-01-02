<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\WeatherSubscriberCreateEvent;
use PharIo\Manifest\Email;

class SendEmailsOnSubscriberCreate implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\WeatherSubscriberCreateEvent  $event
     * @return void
     */
    public function handle(WeatherSubscriberCreateEvent $event)
    {
        sleep(2);
        Log::info('event sending createsub mail on '.$event->subscriber->email);
    }
} 
