<?php
    require '../dbconn.php';

    $comment = $_POST['comment'];
    $commentId = $_GET['comment'];

    $name = $_SESSION['name'];
    $fetchIdSql = "SELECT user_id FROM users WHERE name = '$name'";

    $userId = $pdo->query($fetchIdSql)->fetch()[0];

    $date = date("Y-m-d H:i:s");

    //comment   fk          fk_target   likes   date   user_fk
    //$comment  $commentId  1           0       $date  $userId

    $sql = "INSERT INTO comments (comment, fk, fk_target, likes, date, user_fk) VALUES ('$comment', '$commentId', 2, 0, '$date', '$userId')";
    $pdo->query($sql);

    header("Location:/$URL/");