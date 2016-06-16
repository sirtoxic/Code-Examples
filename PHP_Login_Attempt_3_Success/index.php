<?php
session_start();

require 'database.php';
if( isset($_SESSION['user_id']) ){
	$records = $conn->prepare('SELECT ID, user_email, user_pass FROM customers WHERE ID = :id');
	$records->bindParam(':id',$_SESSION['user_id']); 
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if (count($results) > 0 ){
		$user = $results;
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Logon Attempt 3</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="header">
		<a href="/PHP_Login_Attempt_3">Home</a>
	</div>

	<?php if (isset($_SESSION['user_id'])) { ?>
		<br />Welcome <?= $user['user_email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>
	<?php } else { ?>
	<h1>Please Logon or register</h1>
	<a href="logon.php">Logon</a> or
	<a href="register.php">Register</a>
	<?php } ?>
</body>
</html>