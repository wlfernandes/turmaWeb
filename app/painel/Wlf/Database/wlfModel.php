<?php
/**
 * Created by PhpStorm.
 * User: Welin
 * Date: 27/09/2017
 * Time: 09:24
 */

namespace Wlf\Database;

use src\Interfaces\Imodel;
use Wlf\Database\Connection;
use Wlf\Database\AttributesCreate;
use Wlf\Database\AttibutesUpdate;
use PDOException;


class wlfModel implements Imodel{

    private $database;


    public function __construct(){
        $database = new Connection();
        $this->database = $database->connection();

    }


    public function create($attributes){

        $attributes = new AttributesCreate;

        $fields = $attributes->createFields($attributes);
        $values = $attributes->createValues($attributes);
        $query = "insert into $this->table($fields) values($values)";
        $pdo = $this->database->prepare($query);
        $bindParameters = $attributes->bindCreateParameters($attributes);
        try{
            $pdo->execute($bindParameters);
            return $this->database->lastInsertId();

        }catch (\PDOException $e){
            dump($e->getMessage());

        }

    }
    public function read(){
        $query = "select * from $this->table";
        $pdo = $this->database->prepare($query);

        try{
            $pdo->execute();
            return $pdo->fetchAll();

        }catch (\PDOException $e){
            dump($e->getMessage());

        }
    }
    public function update($id, $attributes){
        $attributesUpdate = new AttibutesUpdate();
        $fields = $attributesUpdate->updateFields($attributes);

        $query= "update $this->table set $fields WHERE id =:id";
        $pdo = $this->database->prepare($query);
        $bindUpdateParameters = $attributesUpdate->bindUpdateParameters($attributes);
        $bindUpdateParameters['id'] = $id;

        try{
           $pdo->execute($bindUpdateParameters);

        }catch (\PDOException $e){
            dump($e->getMessage());

        }

    }
    public function delete($name, $value){
        $query= "delete from $this->table WHERE $name=:$name";
        $pdo = $this->database->prepare($query);

        try{
            $pdo->bindParam(":$name",$value);
            $pdo->execute();
            return $pdo->rowCount();

        }catch (\PDOException $e){
            dump($e->getMessage());

        }

    }

    public function findBy($name, $value){
        $query= "select * from $this->table WHERE $name = $value";
        $pdo = $this->database->prepare($query);

        try{

            $pdo->execute();
            return $pdo->fetch();

        }catch (\PDOException $e){
            dump($e->getMessage());

        }

    }




}