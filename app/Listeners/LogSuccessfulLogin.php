<?php

namespace App\Listeners;

use App\Models\LoginActivity;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfulLogin
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
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        LoginActivity::create([
            'user_id'       =>  $event->user->id,
            'user_agent'    =>  \Illuminate\Support\Facades\Request::header('User-Agent'),
            'ip_address'    =>  \Illuminate\Support\Facades\Request::ip()
        ]);
    }
}
