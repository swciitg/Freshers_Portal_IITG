<?php 
session_start();
if(isset($_POST['signout']))
						{
						session_destroy();
						header('Location: admin.php');
						}
?>