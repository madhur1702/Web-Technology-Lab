<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome, you are logged in!</h2>
<a href="logout.php">Sign Out</a>
