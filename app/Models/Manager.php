<?php

namespace Projet\Models;

use Exception;

class Manager{
    protected function dbConnect(){

        $path = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";charset=utf8";

        try{
            $bdd = new \PDO($path, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
            return $bdd;
        } catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
}