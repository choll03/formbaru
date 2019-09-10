<?php 
    ob_start();
    session_start();
    
    if(!isset($_SESSION['login'])){
        header('Location: login.php');
    }

    echo "Selamat datang " . $_SESSION['user'];

?>

<br>
<a href="logout.php">Logout</a>