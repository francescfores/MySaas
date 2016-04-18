<?php

namespace App\Listeners;

use App\Events\UserHasChange;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCacheForget
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
     * @param  UserHasChange  $event
     * @return void
     */
    public function handle(UserHasChange $event)
    {

        //id : $event->user->id;
        //Cache::forget('query.users');
    }
}
