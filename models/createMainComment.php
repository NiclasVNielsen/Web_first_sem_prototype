<?php
    require '../dbconn.php';

    $comment = $_POST['comment'];
    $postId = $_GET['post'];

    $name = $_SESSION['name'];
    //$fetchIdSql = "SELECT user_id FROM users WHERE name = '$name'";

    $userId = $_SESSION["user_id"];

    $date = date("Y-m-d H:i:s");

    //comment   fk       fk_target   likes   date   user_fk
    //$comment  $postId  1           0       $date  $userId

    $sql = "INSERT INTO comments (comment, fk, fk_target, likes, date, user_fk) VALUES ('$comment', '$postId', 1, 0, '$date', '$userId')";
    $pdo->query($sql);

    header("Location:/$URL/");