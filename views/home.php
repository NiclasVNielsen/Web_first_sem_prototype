<?php
    /* things act like they are in the root folder here */
    require 'dbconn.php';

    $sql = 'SELECT * FROM users'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 

        foreach($pdo->query($sql) as $row) {
            echo $row['name'] . "\n";
        ?>
        <br>
        <?php
            echo $row['password'] . "\n";
        }

        ?>
    </div>
</body>
</html>