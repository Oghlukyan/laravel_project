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
    public function put($id,$data);

    /*
     * insert menu
     * @params $data
     *
     * @return boolean;
     */
    public function post($data);
    /*
     * delete menu
     * @params $id
     *
     * @return boolean
     */
    public function delete($id);
}