<?php
session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /PHP_Login_Attempt_3/");
}

require 'database.php';

$message = '';

if (!empty($_POST['email'])&& !empty($_POST['password'])) {
 
	$records = $conn->prepare('SELECT ID, user_email, user_pass FROM customers WHERE user_email = :email');
	$records->bindParam(':email',$_POST['email']); 
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	if (count($results) > 0 && password_verify($_POST['password'], $results['user_pass'])){
		$_SESSION['user_id']= $results['ID'];
		header("Location: /PHP_Login_Attempt_3/");
	} else {
		$message = 'Sorry those details are not correct';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Logon Below</title>
</head>
<body>
	<div class="header">
		<a href="/PHP_Login_Attempt_3">Home</a>
	</div>
	<h1>Login</h1>
	<span>or <a href="register.php"> Register Here</a></span>
	<?php if (!empty($message)) { ?>
		<p><?= $message ?> </p>
	<?php }?>
	<form action="logon.php" method="POST">
		<input type="text" placeholder="Enter your Email" name="email">
		<input type="password" placeholder="Enter your Password" name="password">
		<input type="submit">
	</form>
</body>
</html>