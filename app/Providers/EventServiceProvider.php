<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\PostCreated;
use App\Events\PostUpdated;
use App\Events\PostDeleted;
use App\Events\LessonCreated;
use App\Listeners\PostCacheListener;
use App\Listeners\LessonCacheListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        PostCreated::class => [
            PostCacheListener::class,
        ],
        
        PostUpdated::class => [
            PostCacheListener::class,
        ],

        PostDeleted::class => [
            PostCacheListener::class,
        ],
        
        LessonCreated::class =>[
            LessonCacheListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
