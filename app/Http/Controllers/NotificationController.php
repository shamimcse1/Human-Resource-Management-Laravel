<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\HrNotofication;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notify()
    {
        if (auth()->user()) {
            $user = User::first();

            auth()->user()->notify(new HrNotofication($user));
        }
    }

    public function markasread($id)
    {
        if ($id) {
            auth()->user()->unreadnotifications->where('id', $id)->markAsRead();
        }
        return back();
    }
}
