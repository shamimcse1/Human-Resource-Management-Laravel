<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LoginActivity;
use Illuminate\Http\Request;

class LoginActivityController extends Controller
{
    public function index()
    {
        // $loginActivities = LoginActivity::all();
        // if (request('search')) {
        //     $loginActivities = $loginActivities
        //         ->where('user_id', 'like', '%' . request('search') . '%');
        // }

        $loginActivities = LoginActivity::latest();

        if (request('search')) {
            $loginActivities = $loginActivities
                ->where('user_id', 'like', '%' . request('search') . '%');
        }
        $loginActivities = $loginActivities->paginate(7);
        // $loginActivities = LoginActivity::whereUserId(auth()->user()->id)->latest();
        // dd($loginActivities);
        return view('backend.users.attendance-sheet', compact('loginActivities'));
    }
}
