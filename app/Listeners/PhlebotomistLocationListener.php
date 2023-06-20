<?php

namespace App\Listeners;

use App\Events\PhlebotomistLocationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PhlebotomistLocationListener
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
     * @param  PhlebotomistLocationEvent  $event
     * @return void
     */
    public function handle(PhlebotomistLocationEvent $event)
    {
        //
    }
}
