<?php
    require '../../dbconn.php';

    $sql = 'SELECT * FROM users'
?>

<?php
    require '../partials/header.php';
?>

<?php 
    //if logged in redirect to /
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == "true"){
        header("Location:/$URL/");
    }
?>

<form method="post" action="/<?php echo $URL ?>/models/login.php">
    <fieldset>
        <legend>Login</legend>
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Login">
    </fieldset>
</form>

<?php
    if(isset($_GET["err"]) && $_GET["err"] == "wronginfo"){
?>
    <p>
        Username or Password is wrong
    </p>
<?php 
    }
?>

<?php
    require '../partials/footer.php';
?>