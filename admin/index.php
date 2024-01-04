<?php
require "../config/koneksi.php";
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php");
}


?>
<html>  
    <head>
        <title> Admin </title>
    </head>
    
        <frameset rows="25%,62%,13%" name="main">
            <frame src="header.php" noresize scrolling=no>
            <frameset cols="10%, 90%">
            <frame src="menu.php">
            <frame src="home.php" name="kanan">
            </frameset>
            <frame src="footer.php" noresize scrolling=no>
        </frameset>
    
</html>