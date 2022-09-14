<?php
    require '../dbconn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT name, password FROM users WHERE name=$name AND password=$password";

    $data = $pdo->query($sql)->fetch();
    
    if($data['name']){
        //login
        print_r($data['name']);
    }else{
        header("Location: /$URL/views/login/login.php?err=wronginfo");
    }

    //header("Location:/$URL/index.php?err=wronginfo");
