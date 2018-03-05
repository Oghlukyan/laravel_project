<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 27-Feb-18
 * Time: 11:33 PM
 */

namespace App\Interfaces;

use App\Http\Requests\Menu as MenuRequest;

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
     * insert menu
     * @params $data
     *
     * @return boolean;
     */
    public function post($data);

    /*
     * update existing menu
     * @params $id,$data
     *
     * @return boolean;
     */
    public function put($id, $data);

    /*
     * delete menu
     * @params $id
     *
     * @return boolean
     */
    public function remove($id);
}