<?php  

$user = $_POST['user'];
$password = $_POST['password'];

if ( isset ($_POST['submit']) ){

	if ($_POST['user'] == "nur" &&
		$_POST['password'] == "123"){

		header('Location : dashboard.php');
		echo 'login berhasil';
		
	}else {
		header('Location : login.php');
		echo 'login gagal!'; 
	}
}

?>

