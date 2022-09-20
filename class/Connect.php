<?php


class Connect
{
    public function connect_db(){
        try {
            if(!isset($cn)) {
                $cn = new PDO('mysql:host=127.0.0.1; dbname=db_cadpalavras','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $cn;
    }    
}


?>