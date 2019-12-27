<?php

namespace ConfrariaWeb\Historic\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HistoricListener
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
     * @param  $event
     * @return void
     */
    public function handle($event)
    {
        $obj = ($event->obj) ? $event->obj : null;
        $historic = isset($event->historic) ? $event->historic : NULL;
        if (isset($obj) && isset($historic)) {
            $obj->register($historic);
        }
    }
}
