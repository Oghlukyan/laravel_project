<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.admin-home');
    }

    public function getUsers(){
        $users = DB::table('users')->get();
        return view('admin.admin-users')->with('users', $users);
    }

    public function getAdmins(){
        $admins = DB::table('admins')->get();
        return view('admin.admin-admins')->with('admins', $admins);
    }
}
