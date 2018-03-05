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

    public function put(Request $request){
        $id = $request->input('id');

        $title = $request->input('title');
        $text = $request->input('text');
        $meta_title = $request->input('meta_title');
        $meta_description = $request->input('meta_description');
        $status = $request->input('status') ? '1': '0';
        $number = $request->input('number');
        $currentTime = date('Y-m-d H:i:s');
        $createdDate = $this->model->getCreatedDate($id);

        $data = ['title'=>$title, 'text'=>$text, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'status'=>$status, 'number'=>$number, 'updated_at'=>$currentTime, 'created_at'=>$createdDate];
        $this->model->change($id, $data);
    }

    public function post(Request $request){
        $title = $request->input('title');
        $text = $request->input('text');
        $meta_title = $request->input('meta_title');
        $meta_description = $request->input('meta_description');
        $status = $request->input('status') ? '1': '0';
        $number = $request->input('number');
        $currentTime = date('Y-m-d H:i:s');

        $data = ['title'=>$title, 'text'=>$text, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'status'=>$status, 'number'=>$number, 'updated_at'=>$currentTime, 'created_at'=>$currentTime];
        $this->model->insert($data);
    }

    public function remove(Request $request){
        $id = $request->input('id');
        $this->model->remove($id);
    }
}