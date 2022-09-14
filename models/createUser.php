<?php
    require '../dbconn.php'; /* is this needed? */

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";

    $pdo->query($sql);