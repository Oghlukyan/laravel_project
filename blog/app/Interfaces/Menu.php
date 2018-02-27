<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 27-Feb-18
 * Time: 11:33 PM
 */

namespace App\Interfaces;

use Illuminate\Http\Request;

interface Menu
{
    public static function toArray(Request $request);
    public static function insertToDB(Request $request);
}