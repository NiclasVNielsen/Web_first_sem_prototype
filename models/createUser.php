<?php
    require '../dbconn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    $pdo->query($sql);
    
    header("Location: /$URL/views/login/signup.php?meep=moop");
