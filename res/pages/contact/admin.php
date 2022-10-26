<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($username == 'user' && $password == 'password') {
			session_start();
			$_SESSION["authenticated"] = 'true';
			header('Location: registrations_entry.php');
		}
		else {
			header('Location: admin.php');
		}
		
	} else {
		header('Location: admin.php');
	}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body{
			background: rgba(40, 169, 103, 0.8);
			font-family: 'Yanone Kaffeesatz';
			font-size:20px;
		}
	</style>
</head>
<body>
<center>
<div id="page">
	<!-- [banner] -->
	<header id="banner">
		<hgroup>
			<h1>Admin Login</h1>
		</hgroup>		
	</header>
	<!-- [content] -->
	<section id="content">
		<form id="login" method="post">
			<label for="username">Username:</label>
			<input id="username" name="username" type="text" required>
			<label for="password">Password:</label>
			<input id="password" name="password" type="password" required>					
			<br /></br>
			<input type="submit" value="Login">
		</form>
	</section>
</div>
</center>
<!-- [/page] -->
</body>
</html>
<?php } ?>