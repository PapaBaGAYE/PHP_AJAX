<?php

    define("HOST", "localhost");
    define("DB_NAME", "php_ajax_crud");
    define("USER", "root");
    define("PASS", "");

    try{
        $mysqli = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER,PASS);
        $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connected";
        
    }catch(PDOException $error){
            echo $error;
        }