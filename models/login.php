<?php
    require '../dbconn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT user_id, name, password FROM users WHERE name='$name' AND password='$password'";

    $data = $pdo->query($sql)->fetchAll();
    
    if($data[0]['name']){
        //login
        $_SESSION["name"] = $data[0]['name'];
        $_SESSION["loggedin"] = "true";
        $_SESSION["user_id"] = $data[0]['user_id'];

        header("Location:/$URL/index.php");
    }else{
        header("Location: /$URL/views/login/login.php?err=wronginfo");
    }
