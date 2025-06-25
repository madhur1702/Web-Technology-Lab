<?php
session_start();

$correct_username = "admin";
$correct_password = "1234";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $correct_username && $_POST['password'] === $correct_password) {
        $_SESSION['loggedin'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password.<br><br>";
    }
}
?>

<form method="post" action="">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Sign In">
</form>
