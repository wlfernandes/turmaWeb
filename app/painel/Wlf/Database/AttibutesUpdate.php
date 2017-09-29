<?php
/**
 * Created by PhpStorm.
 * User: Welin
 * Date: 29/09/2017
 * Time: 16:32
 */

namespace Wlf\Database;


class AttibutesUpdate{
   public function combineUpdateFields($attributes){
       $keys = array_keys($attributes);
       $separadoPorDoisPontos = ':'.implode('=:',$keys);
       $combine = array_combine($keys,explode('=',$separadoPorDoisPontos));
       return $combine;
   }

   public function updateFields($attributes){
       // ['name' => :name, 'email' => :email]

       $combine = $this->combineUpdateFields($attributes);
       $query = null;

       // name=:name, email=:email,

       foreach ($combine as $key => $value){
           $query.=$key.'='.$value.',';
       }

       //name=:name, email=:email
       $novaquery = rtrim($query,',');

       return $novaquery;
   }

   public function bindUpdateParameters($attributes){
       $keys = array_keys($attributes);
       $separadoPorDoisPontos = ':'.implode(',:',$keys);
       $combineUpdate = array_combine(explode(',', $separadoPorDoisPontos), array_values($attributes));
       return $combineUpdate;

   }




}