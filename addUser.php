<?php

    include("database/database.php");

    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];

    $request = $mysqli->prepare('INSERT into users (name, adress, age, gender, phone) VALUES (?, ?, ?, ?, ?)');
    $request->execute(array($name, $adress, $age, $gender, $phone));

    if($request)
    {
        echo 1;
    }
    else
    {
        echo -1;
    }

