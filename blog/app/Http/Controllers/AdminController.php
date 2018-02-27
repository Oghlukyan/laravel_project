<?php

namespace App\Http\Controllers;

use App\Http\Helper\Models;
use App\Services\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    use Models;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.admin-home');
    }

    public function getUsers(){
        $users = $this->getAll('users');
        return view('admin.admin-users')->with('users', $users);
    }

    public function getAdmins(){
        $admins = $this->getAll('admins');
        return view('admin.admin-admins')->with('admins', $admins);
    }

    public function getMenus(){
        $menus = $this->getAll('menus');
        return view('admin.admin-menus')->with('menus', $menus);
    }

    public function insertMenu(Request $request){
        Menu::insertToDB($request);
        $menus = $this->getAll('menus');
        return view('admin.admin-menus')->with('menus', $menus);
    }
}
