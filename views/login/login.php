<?php
    require '../../dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require '../partials/header.php';
?>

<div>
    Login
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
    require '../partials/footer.php';
?>