<?php

    session_start();

    $user="root";
    $pass="";
    $server="localhost";
    $dbanme="dbylli";

    try{
        $conn =new PDO("mysql:host=$server; dbname=$dbanme",$user,$pass);
        echo "connected";
    }catch (PDOException $e){
        echo "error :". $e->getMessage();
    }





?>