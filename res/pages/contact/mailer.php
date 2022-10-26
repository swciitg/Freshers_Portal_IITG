<?php
include_once 'securimage/securimage.php';
$securimage = new Securimage();

##############################################################################################################
//db connect
	$link = mysqli_connect("localhost", "iitgmhnn_ravi", "ravi@nishant", "iitgmhnn_yourDatabase");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

    
    
    if(!empty($_POST)){
	
	 
	// Escape user inputs for security
	
        $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
        $last_name  = mysqli_real_escape_string($link, $_POST['last_name']);
	$collage      = mysqli_real_escape_string($link, $_POST['collage']);
	$coladd      = mysqli_real_escape_string($link, $_POST['coladd']);
        $email      = mysqli_real_escape_string($link, $_POST['email']);
        $phone      = mysqli_real_escape_string($link, $_POST['phone']);
		$altph      = mysqli_real_escape_string($link, $_POST['altph']);
		$acad      = mysqli_real_escape_string($link, $_POST['acad']);
		$contact      = mysqli_real_escape_string($link, $_POST['contact']);
		$district      = mysqli_real_escape_string($link, $_POST['district']);
		$state      = mysqli_real_escape_string($link, $_POST['state']);
        $fb    = mysqli_real_escape_string($link, $_POST['fb']);
        $message    = mysqli_real_escape_string($link, $_POST['message']);
	$captcha 	= mysqli_real_escape_string($link, $_POST['captcha_code']);
        $filtered_email = filter_var($email, FILTER_VALIDATE_EMAIL);
		
        if(!empty($first_name) && !empty($last_name) && !empty($collage)&& !empty($coladd)&& !empty($email) && !empty($phone)&& !empty($acad)&& !empty($contact)&& !empty($district)&& !empty($state)&& !empty($fb) && !empty($message) && !empty($captcha) )
        {

            //insert the data into DB
		// attempt insert query execution
		$sql = "INSERT INTO campus (id, first_name, last_name, collage, coladd, email, phone, altph, acad, contact, district, state, fb, positions ) VALUES (NOW(), '".$first_name."', '".$last_name."', '".$collage."',
					 '".$coladd."', '".$email."', '".$phone."',
                   '".$altph."', '".$acad."', '".$contact."',
				    '".$district."', '".$state."', '".$fb."',
                   '".$message."' )";
		if(mysqli_query($link, $sql)){
		    echo "";
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}


        } 
        
    }
    else
    {
    echo "Please fill all fields";
    }