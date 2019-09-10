<?php  
ob_start();
session_start();

	$user = $_POST['user'];
	$password = $_POST['password'];


	if ($_POST['user'] == "nur" && $_POST['password'] == "123"){

		$_SESSION['login'] = true;
		$_SESSION['user'] = $user;

		header('Location: index.php');
		// echo 'login berhasil';
		
	}else {

		$_SESSION['error'] = true;
		header('Location: login.php');
		// echo 'login gagal!'; 
	}

?>

