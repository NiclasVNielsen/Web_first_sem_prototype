<?php
    /* things act like they are in the root folder here */
    require 'dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require './views/partials/header.php';
?>

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

<?php
    require './views/partials/footer.php';
?>