<?php
    require '../dbconn.php';

    $currentName = $_SESSION['name'];

    $name = $_POST['name'];
    $password = $_POST['password'];

    $nameCheckSql = "SELECT name FROM users WHERE name='$name'";

    $data = $pdo->query($nameCheckSql)->fetchAll();

    $validName = true;
    if($data[0]['name']){
        $validName = false;
    }
    if($data[0]['name'] == $currentName){
        $validName = true;
    }

    if($name != "" && $validName){
        if($password != ""){
            $sql = "UPDATE users SET name = '$name', password = '$password' WHERE name = '$currentName'";
        }else{
            $sql = "UPDATE users SET name = '$name' WHERE name = '$currentName'";
        }
    
        $pdo->query($sql);
    
        $_SESSION['name'] = $name;
    
        header("Location: /$URL/");
    }else{
        header("Location: /$URL/views/login/profile.php?err=nameempty");
    }
