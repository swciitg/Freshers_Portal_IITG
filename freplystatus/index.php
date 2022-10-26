<?php
$username = null;
$password = null;

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($username == 'admin' && $password == 'frEshErs') {
			session_start();
			$_SESSION["authenticated"] = 'true';
			header('Location: registrations_entry.php');
		}
		else {
			header('Location: index.php');
		}
		
	} else {
		header('Location: index.php');
	}
}
?>
<html>
	<head>
		<title>Freshers | Admin Panel</title>
		<meta charset="utf-8">
		<link href="css/styles.css" rel='stylesheet' type='text/css' />
	</head>
	<body>
		 <!-----start-main---->
	 	<div class="main">
			<div class="login-form">
				<h4 align="center">
					<h1><font color="#000">Admin Login</font></h1>
				<p align="center">
					<font style="font-family:verdana;color:red;font-size:16px;font-style:;"></font>
					<font style="font-family:verdana;color:red;font-size:16px;font-style:;"></font>	
					<font style="font-family:verdana;color:red;font-size:16px;font-style:;"></font>
				</p>
				</h4>
				<div class="head">
					<img src="acquia_marina_logo.gif" alt="" style="width:130px;height:130px;"/>
				</div>
				<form  id="login" method="post">
				<input  id="username" name="username" type="text" required/>	
				<input id="password" name="password" type="password" required/>
				<div class="submit">
				<input type="submit" value="Login">
				</div>	
				</form>
			</div>
		</div> 		
</body>
</html>
