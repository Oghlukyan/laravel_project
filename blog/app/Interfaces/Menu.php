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
    /*
     * get menu
     * @params $id
     *
     * @return obj
     */
    public function get($id);
    /*
     * get menus
     *
     * @return obj
     */
    public function getAll();

    /*
     * update existing menu
     * @params $id,$data
     *
     * @return boolean;
     */
    public function put(Request $request);

    /*
     * insert menu
     * @params $data
     *
     * @return boolean;
     */
    public function post(Request $request);
    /*
     * delete menu
     * @params $id
     *
     * @return boolean
     */
    public function remove(Request $request);
}