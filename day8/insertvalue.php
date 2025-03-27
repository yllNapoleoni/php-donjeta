<?php 


    $db="dbylli";
    $host="localhost";
    $user="root";
    $pass="";

    try{
        $pdo=new PDO("mysql:host=$host; dbname=$db",$user,$pass);

        $username="ylli";
        $password="ylli123";
        
        $sql="INSERT INTO users(id,username,password) Values (6,'$username','$password')";

        $pdo ->exec($sql);
        echo "user is added";
         
    }catch(Exception $e){
        echo "error creating table" . $e->getMessage();
    }





?>