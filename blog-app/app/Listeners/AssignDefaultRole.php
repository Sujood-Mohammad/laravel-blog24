<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Registered;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignDefaultRole
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
    public function handle(Registered $event): void
    {
        // Default role id is assumed to be 2 for 'user' role
        $roleId = 2;

        // Attach the role to the user
        $event->user->roles()->attach($roleId);
    }
}
