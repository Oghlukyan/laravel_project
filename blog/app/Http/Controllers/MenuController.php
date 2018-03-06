<?php

namespace App\Http\Controllers;

use \App\Http\Requests\Menu as MenuRequest;

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

    public function store(MenuRequest $request){
        if ($request->has('insert')) {
            $data = $request->all();
            $this->post($data);
        } elseif ($request->has('update')) {
            $id = $request->input('id');
            $data = $request->all();
            $this->put($id, $data);
        }
        return $this->get();
    }

    public function post($data){
        $this->menu->post($data);
    }

    public function put($id, $data){
        $this->menu->put($id, $data);
    }

    public function remove(){
        $id = request('id');
        $this->menu->remove($id);
        return $this->get();
    }
}
