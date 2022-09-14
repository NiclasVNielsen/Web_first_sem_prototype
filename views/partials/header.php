<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            if(isset($_SESSION["name"]) && $_SESSION["name"] != ""){
                echo $_SESSION["name"];
            }
        ?>
        <nav>
            <ul>
                <li>
                    <a href="/<?php echo $URL /* $URL comes from config.php */ ?>/">Home</a>
                </li>
                <li>
                    <a href="/<?php echo $URL ?>/views/login/login.php">login</a>
                </li>
                <li>
                    <a href="/<?php echo $URL ?>/views/login/signup.php">signup</a>
                </li>
            </ul>
        </nav>
    </header>