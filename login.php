<?php

	ob_start();
	session_start();

	$message = "";

	if(isset($_SESSION['error'])){
		$message = "Email dan password salah";
		session_destroy();
	}
?>

<form action="proses_login.php" method="post">
	<input type="text" name="user" id="nama" placeholder="Username">
	<input type="password" name="password" id="passwor" placeholder="password">
	<input type="submit" name="submit">
	<input type="checkbox" name="remember">
	<label for="remember">remember me</label>

</form>

<br>
<p style="color: red"><?php echo $message ?></p>