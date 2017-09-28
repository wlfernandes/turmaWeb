<?php
/**
 * Created by PhpStorm.
 * User: Welin
 * Date: 27/09/2017
 * Time: 17:57
 */

namespace src\Interfaces;

//CRUD
interface Imodel{

    public function create($attributes);
    public function read();
    public function update($id, $attributes);
    public function findBy($name, $value);


}