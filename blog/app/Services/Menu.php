<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 27-Feb-18
 * Time: 11:32 PM
 */

namespace App\Services;

use App\Interfaces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Menu implements Interfaces\Menu
{
    protected $model;
    public function __construct()
    {
        $this->model = new \App\Models\Menu();
    }

    public function get($id){
        return $this->model->whereId($id)->first();
    }

    public function getAll(){
        return $this->model->orderBy('number')->get();
    }

    public function post($data){
        // $this->model->insert($data);
        // OR
        // $this->>model->save();
    }

    public function put($id,$data){
        // $this->model->whereId($id)->update($data);
    }

    public function delete($id){
        // $this->model->whereId($id)->delete();
    }
}