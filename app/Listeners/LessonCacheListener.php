<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Lesson;

class LessonCacheListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
         cache()->forget('lessons');
         $lessons =  Lesson::latest('created_at')->take(20)->get();
         cache()->forever('lessons',$lessons);
         
    }
}
