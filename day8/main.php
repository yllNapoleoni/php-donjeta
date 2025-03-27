<?php 


    $db="dbylli";
    $host="localhost";
    $user="root";
    $pass="";

    try{
        $pdo=new PDO("mysql:host=$host; dbname=$db",$user,$pass);
         $sql="CREATE TABLE users(
         id INT(6) NOT NULL PRIMARY KEY,
         username VARCHAR(30) NOT NULL,
         password varchar(50) Not null)";

         $pdo->exec($sql);
         echo "table is created succesfully";
         
    }catch(Exception $e){
        echo "error creating table" . $e->getMessage();
    }





?>