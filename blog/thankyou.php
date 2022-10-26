<!DOCTYPE html>
<html lang="en" class='v2' dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
     <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="utf-8" />
        <meta name="viewport" content="width = device-width, initial-scale = 1.0, maximum-scale = 1.0 user-scalable = no" />
		<meta name="keywords" value='iit guwahati,iitg,iitg fresher,iitg fresher help,iit guwahati fresher,iit guwahati fresher help,iitg freshers forum,iit guwahati freshers forum,iit guwahati,iitg,iitg freshers,iitg freshers help,iit guwahati freshers,iit guwahati freshers help,iitg fresher forum,iit guwahati freshers forum'/>
		<title>Freshers | IIT Guwahati</title>
		<link rel="author" href="https://plus.google.com/u/0/+RaviNishantIITG/posts"/>
		<meta property="article:author" content="https://www.facebook.com/ravinishantiit" />
		<meta property="og:site_name" content="Freshers | IIT Guwahati" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://iitg.ernet.in/freshers/" />
		<meta property="og:title" content="Freshers | IIT Guwahati" />
		<meta property="og:image" content="http://iitg.ernet.in/freshers/res/images/ico/logo.png" />
		<meta property="article:section" content="Education" />
		<meta name="author" content="Ravi Nishant" />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:creator" content="@ravinishantiitg">
		<meta name="twitter:image" content="http://iitg.ernet.in/freshers/res/images/ico/logo.png">
		<meta name="twitter:title" content="Freshers | IIT Guwahati">
		<meta name="twitter:url" content="http://iitg.ernet.in/freshers/">
		<meta name="twitter:domain" content="iitg.ernet.in">

        <!-- core CSS -->
        <link href="res/css/bootstrap.min.css" rel="stylesheet">
        <link href="res/css/font-awesome.min.css" rel="stylesheet">
        <link href="res/css/animate.min.css" rel="stylesheet">
        <link href="res/css/prettyPhoto.css" rel="stylesheet">
        <link href="res/css/main.css" rel="stylesheet">
        <link href="res/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
		<script src="res/js/html5shiv.js"></script>
		<script src="res/js/respond.min.js"></script>
		<![endif]-->       
        <link rel="shortcut icon" href="res/images/ico/logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="res/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="res/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="res/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="res/images/ico/apple-touch-icon-57-precomposed.png">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-65033747-1', 'auto');
		  ga('send', 'pageview');

		</script>
    </head><!--/head-->

    <body class="homepage">
<?php
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	ini_set("display_errors", 0);
	$con = mysql_connect("localhost","frsherDbUser","fresh@714");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("freshersDb", $con);
	$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
	$min=10000;
	$max=99999;
	$application_no = rand($min,$max);
	$query_no = "JEE/2017/".$application_no;
	$sql = "INSERT into query (id, query_no, full_name, email, phone, message, ip, time, reply_status) VALUES ('', '$query_no', '$_POST[full_name]','$_POST[email]','$_POST[phone]','$_POST[message]','$ip',NOW(),'no')";
	
	//Mail to user
	$message = "Dear ".$_POST['full_name']."\r\n We have received your query and will contact you as soon as possible.\r\n Thanking You.\r\n Regards,\r\n Team SWC \r\n\r\n Note: This is an automated email, please do not reply.\r\n";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: SWC, IIT Guwahati <swc@iitg.ernet.in>' . "\r\n";
	$user_webmail = $_POST['email'];
	mail($user_webmail , 'Thank you for your query.' , $message , $headers);
	
	//Mail to Admin
	//$message = $_POST['message'];
	//$headers = "MIME-Version: 1.0" . "\r\n";
	// More headers
	//$name = "From:". $_POST['full_name'];
	//$email = $_POST['email'];
	//$headers .= $name.' <'.$email.'>' . "\r\n";
	//$user_webmail = "dos@iitg.ernet.in,doaa@iitg.ernet.in,adosa_1@iitg.ernet.in,adosa_2@iitg.ernet.in,adoaa@iitg.ernet.in";
	//$subject = "Query from ".$_POST['full_name']." (".$query_no.")";
	//mail($user_webmail , $subject, $message , $headers);
	if (!mysql_query($sql,$con)){
		die('Error: ' . mysql_error());
	}
	mysql_close($con);
?>

<section id="error" class="container text-center" style="height:500px">
	<h1>Thanks for contacting with us!! </h1>
	<p>We will get in touch with you shortly.</p>
	<a class="btn btn-primary" href="index.php">GO BACK TO THE HOMEPAGE</a>
</section>
    </body>
</html>
