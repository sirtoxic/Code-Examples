<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){
	header("Location: /PHP_Login_Attempt_3/");
}


$message = '';

if (!empty($_POST['email'])&& !empty($_POST['password'])) {
	$sql = "INSERT INTO customers (user_email, user_pass) VALUES (:email, :password)";
	$statment = $conn->prepare($sql);

	$statment->bindParam(':email',$_POST['email']); 
	$password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$statment->bindParam(':password', $password_hash);

	if ($statment->execute()) {
		$message = 'Successfully created new user';
	} else {
		$message = 'Sorry there must have been an issue creating your account';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Rigister Below</title>
</head>
<body>
	<div class="header">
		<a href="/PHP_Login_Attempt_3/">Home</a>
	</div>
	<?php if (!empty($message)) { ?>
		<p><?= $message ?> </p>
	<?php }?>
	<h1>Register</h1>
	<span>or <a href="logon.php"> Logon Here</a></span>
	<form action="register.php" method="POST">
		<input type="text" placeholder="Enter your Email" name="email">
		<input type="password" placeholder="Enter A Password" name="password">
		<input type="password" placeholder="Reapet That Password" name="confirm_password">
		<input type="submit">
	</form>
</body>
</html>