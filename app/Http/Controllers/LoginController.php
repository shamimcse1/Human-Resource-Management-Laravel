<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// namespace Admin\Pondit\Http\Controllers;

use App\Http\Controllers\Controller;
use Hrm\Pondit\Models\Department;
use Hrm\Pondit\Models\Designation;
use Hrm\Pondit\Models\Meeting;
use Hrm\Pondit\Models\Project;
use Menu\Pondit\Models\LeaveManagement;
use Profile\Pondit\Models\Profile;
use Illuminate\Support\Facades\DB;
use Carbon;

class LoginController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->role;
        if ($usertype == 'hr') {

            $today = Carbon\Carbon::now()->format('Y-m-d');;
            $users = DB::table('users')
                ->where('last_login_time', '=', $today)
                ->get();
            $attendCount = count($users);


            $pCount = Profile::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $profileCount = count($pCount);

            $deCount = Department::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $departmentCount = count($deCount);

            $dCount = Designation::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $designationCount = count($dCount);

            $lCount = LeaveManagement::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $leaveCount = count($lCount);

            $prCount = Project::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $projectCount = count($prCount);

            $mCount = Meeting::orderBy('id', 'asc')
                ->pluck('id')
                ->toArray();
            $meetingCount = count($mCount);
            return view('admin::home', compact('profileCount', 'departmentCount', 'designationCount', 'leaveCount', 'projectCount', 'meetingCount', 'attendCount'));
        } else {
            return view('admin::employee');
        }
    }
}
