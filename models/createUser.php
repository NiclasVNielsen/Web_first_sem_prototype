<?php
    require '../dbconn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    
    $nameCheckSql = "SELECT name FROM users WHERE name=$name";

    $data = $pdo->query($nameCheckSql)->fetch();

    $validName = true;
    if($data[0]){
        $validName = false;
    }
    if($data[0] == $currentName){
        $validName = true;
    }

    if($validName && $name != ""){
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
    
        $pdo->query($sql);
        
        header("Location: /$URL/");
    }else{
        header("Location: /$URL/views/login/signup.php?err=invalidname");
    }
