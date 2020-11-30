<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\pageViewer;
class increaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct( )
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(pageViewer $event)
    {
        $this->updateViews($event->view);
    }


     function updateViews($views){

        $views->views=$views->views+1;
        $views->save();
    }
}
