<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');

    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function settings()
    {
        $data['setting'] = Setting::where('id',1)->first();

        // dd($data['setting']);
        return view('admin.settings', $data);
    } 









    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
