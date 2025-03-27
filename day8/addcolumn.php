<?php 


    $db="dbylli";
    $host="localhost";
    $user="root";
    $pass="";

    try{
        $pdo=new PDO("mysql:host=$host; dbname=$db",$user,$pass);

         $sql="ALTER TABLE products ADD email VARCHAR(255)";

         $pdo->exec($sql);
         echo "column created succesfully";
         
    }catch(Exception $e){
        echo "error creating table" . $e->getMessage();
    }





?>