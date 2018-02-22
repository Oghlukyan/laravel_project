<?php
namespace App\Http\Helper;

use Illuminate\Support\Facades\DB;
trait Models{
    protected function getAll($table){
        return DB::table($table)->get();
    }
}