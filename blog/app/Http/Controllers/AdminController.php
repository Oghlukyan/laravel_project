<?php

namespace App\Http\Controllers;

use App\Http\Helper\Models;

class AdminController extends Controller
{
    use Models;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.main.admin-home');
    }

    public function getUsers(){
        $users = $this->getAll('users');
        return view('admin.main.admin-users')->with('users', $users);
    }

    public function getAdmins(){
        $admins = $this->getAll('admins');
        return view('admin.main.admin-admins')->with('admins', $admins);
    }

}
