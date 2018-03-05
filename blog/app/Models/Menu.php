<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public static function getCreatedDate($id){
        return (DB::table('menus')->select('created_at')->where('id', $id)->get())[0]->created_at;
    }

    public static function change($id, $data){
        DB::table('menus')->where('id', $id)->update($data);
    }

    public static function insert($data){
        DB::table('menus')->insert($data);
    }

    public static function remove($id){
        DB::table('menus')->where('id', $id)->delete();
    }
}
