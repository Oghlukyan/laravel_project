<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 27-Feb-18
 * Time: 11:32 PM
 */

namespace App\Services;

use App\Interfaces;

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
        $title = $data['title'];
        $text = $data['text'];
        $meta_title = $data['meta_title'];
        $meta_description = $data['meta_description'];
        $status = array_key_exists('status', $data);
        $number = $data['number'];
        $currentTime = date('Y-m-d H:i:s');

        $data = ['title'=>$title, 'text'=>$text, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'status'=>$status, 'number'=>$number, 'updated_at'=>$currentTime, 'created_at'=>$currentTime];
        $this->model->insert($data);
    }

    public function put($id, $data){
        $title = $data['title'];
        $text = $data['text'];
        $meta_title = $data['meta_title'];
        $meta_description = $data['meta_description'];
        $status = array_key_exists('status', $data);
        $number = $data['number'];
        $currentTime = date('Y-m-d H:i:s');
        $createdDate = $this->model->getCreatedDate($id);

        $data = ['title'=>$title, 'text'=>$text, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'status'=>$status, 'number'=>$number, 'updated_at'=>$currentTime, 'created_at'=>$createdDate];
        $this->model->change($id, $data);
    }

    public function remove($id){
        $this->model->remove($id);
    }
}