<?php
    require '../dbconn.php';

    $currentName = $_SESSION['name'];

    $name = $_POST['name'];
    $password = $_POST['password'];

    //if name == current_name dont change it
    //if password == "" dont change it

    if($name != ""){
        if($password != ""){
            $sql = "UPDATE users SET name = $name, password = $password WHERE name = $currentName";
        }else{
            $sql = "UPDATE users SET name = $name WHERE name = $currentName";
        }
    
        $pdo->query($sql);
    
        $_SESSION['name'] = $name;
    
        header("Location: /$URL/");
    }else{
        header("Location: /$URL/views/login/profile.php?err=nameempty");
    }
