<html>
<head>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/menu.css" type="text/css">
	<title>Test Logon System</title>
</head>
<body>
	<div id=holder>
		<div id="header">
			
		</div>
		<div id="navbar">
			<nav>
				<ul>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Forgot Password</a></li>
				</ul>
			</nav>
		</div>
		<div id="content">
			<div id="pageHeading">
				<h1>Page Heading</h1>
			</div>
			<div id="contentLeft">
				<h2>Your message Here</h2>
				<h6><br>Your Message</h6>
			</div>
			<div id="contentRight">
				<form action="action_page.php">
    				<label for="fname">First Name</label>
    				<input type="text" id="firstName" name="firstname">

    				<label for="lname">Last Name</label>
    				<input type="text" id="lastName" name="lastname"><br><br>

    				<label for="fname">Username</label>
    				<input type="text" id="username" name="username">

    				<label for="lname">Password</label>
    				<input type="text" id="password" name="password"><br><br>

    				<label for="lname">E-Mail</label>
    				<input type="email" id="email" name="email"><br><br>


    				<br><br><input type="submit" value="Submit">
  				</form>
			</div>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>