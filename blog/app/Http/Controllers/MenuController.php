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
        return view('admin.admin-menus')->with('menus', $menus);
    }

    public function store(\App\Http\Requests\Menu $request){
        if($request->has('update')){

        }elseif ($request->has('insert')){
            $model = $this->post($request);
        }else{
            return back()->with('status','Not Valid Request');
        }
    }

    public function put($id,$request){
        // add your logic for request Or if the format valid ->
        return $this->menu->put($id,$request);
    }

    public function post($request){
        // add your logic for request Or if the format valid ->
        return $this->menu->post($request);
    }

    public function delete($id){
        // add your logic for request Or if the format valid ->
        return $this->menu->delete($id);
    }
}
