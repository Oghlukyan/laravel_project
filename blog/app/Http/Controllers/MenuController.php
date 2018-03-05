<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends AdminController
{
    protected $menu;
    public function __construct(\App\Interfaces\Menu $menu)
    {
        parent::__construct();
        $this->menu = $menu;
    }

    public function get(){
        $menus = $this->menu->getAll();
        return view('admin.main.menus.admin-menus')->with('menus', $menus);
    }

    public function store(\App\Http\Requests\Menu $request){
        if ($request->has('update')) {
            $this->put($request);
        } elseif ($request->has('insert')) {
            $this->post($request);
        } elseif ($request->has('delete')) {
            $this->remove($request);
        }
        return $this->get();
    }

    public function put(Request $request){
        $this->menu->put($request);
    }

    public function post(Request $request){
        $this->menu->post($request);
    }

    public function remove(Request $request){
        $this->menu->remove($request);
    }
}
