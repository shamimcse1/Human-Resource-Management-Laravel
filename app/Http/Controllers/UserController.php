<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationMail;
use App\Models\LoginActivity;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use Carbon;


class UserController extends Controller
{
    public function index()
    {
        $this->authorize('isHr');
        $user = User::latest();

        if (request('search')) {
            $user = $user
                ->where('name', 'like', '%' . request('search') . '%');
        }
        $users = $user->paginate(7);
        return view('backend.users.index', compact('users'));
    }

    public function attendEmployee()
    {
        $today = Carbon\Carbon::now()->format('Y-m-d');;
        $attendEmployees = DB::table('users')
            ->where('last_login_time', '=', $today)
            ->get();
        return view('backend.users.attend-employee', compact('attendEmployees'));
    }
    public function create()
    {
        $this->authorize('isHr');
        return view('backend.users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'image' => $this->uploadImage(request()->file('image'))
            ]);
            event(new Registered($user));
            \Mail::to($user->email)->send(new RegistrationMail($user));
            return redirect()->route('users.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('backend.users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,

            ]);

            return redirect()->route('users.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $user = User::where('id', $id)->first();
            $user->delete();
            return redirect()->route('users.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function uploadImage($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/images/' . $fileName);
        return $fileName;
    }
}
