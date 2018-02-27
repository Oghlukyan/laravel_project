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
    public static function toArray(Request $request){
        $title = $request->input('title');
        $text = $request->input('text');
        $meta_title = $request->input('meta_title');
        $meta_description = $request->input('meta_description');
        $status = $request->input('status') ? '1': '0';
        $number = $request->input('number');
        $currentTime = date('Y-m-d H:i:s');

        $data = ['title'=>$title, 'text'=>$text, 'meta_title'=>$meta_title, 'meta_description'=>$meta_description, 'status'=>$status, 'number'=>$number, 'updated_at'=>$currentTime, 'created_at'=>$currentTime];
        return $data;
    }

    public static function insertToDB(Request $request){
        $data = self::toArray($request);
        DB::table('menus')->insert($data);
    }
}