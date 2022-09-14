<?php
    require '../dbconn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name, password FROM users WHERE name=$name AND password=$password";

    $data = $pdo->query($sql)->fetch();
    
    if($data['name']){
        //login
        $_SESSION["name"] = $data['name'];
        $_SESSION["loggedin"] = "true";

        header("Location:/$URL/");
    }else{
        header("Location: /$URL/views/login/login.php?err=wronginfo");
    }

