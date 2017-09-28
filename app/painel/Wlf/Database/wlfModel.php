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

class wlfModel implements Imodel{

    private $database;
    private $attributes;

    public function __construct(){
        $database = new Connection();
        $this->database = $database->connection();
        $this->attributes = new Attributes;
    }


    public function create($attributes){

        $fields = $this->attributes->createFields($attributes);
        $values = $this->attributes->createValues($attributes);
        $query = "insert into $this->table($fields) values($values)";
        $pdo = $this->database->prepare($query);
        $bindParameters = $this->attributes->bindCreateParameters($attributes);
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