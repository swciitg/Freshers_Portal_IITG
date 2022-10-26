<?php session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="main.css" type="text/css" />
    <link href="style/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="scripts/jquery-1.5.2.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>4th INTERNATIONAL CONVENTION<br>IIT Guwahati</h1><br>
	<div id="note"><h2>Registration succesefull!</h2></div>
	<div class="form-style-5">
	<p style="text-align:justify;color:red">Registration for 4th International Convention of SPIC MACAY at IIT Guwahati is now closed. If you are still interested, please mail to <a href="mailto:interconregistrations@spicmacay.com">interconregistrations@spicmacay.com</a>
	<form action="" method="post" id="contactForm" class="dl_form">
	<fieldset>
	<legend><span class="number">1</span> Personal Info</legend>
	<input type="text" name="first_name" id="first_name" value="<?php echo $_POST['first_name'];?>" placeholder="First Name *">
	<input type="text" name="last_name" id="last_name" value="<?php echo $_POST['last_name'];?>" placeholder="Last Name *">
	<span>Gender: </span>
	<span>
	  <input style="margin-bottom:30px;" type="radio"  name="gender" id="gender" value="Male" <?php if (isset($_POST[ 'gender']) && $_POST[ 'gender']=='Male' ){echo ' checked="checked"';}?>>Male
	  <input type="radio"  name="gender" id="gender" value="Female" <?php if (isset($_POST[ 'gender']) && $_POST[ 'gender']=='Female' ){echo ' checked="checked"';}?>>Female
	  <input type="radio"  name="gender" id="gender" value="Other" <?php if (isset($_POST[ 'gender']) && $_POST[ 'gender']=='Other' ){echo ' checked="checked"';}?>>Other
	</span>
	<input type="text" name="age" id="age" value="<?php echo $_POST['age'];?>" placeholder="Age *">
	<input type="text" name="contact" value="<?php echo $_POST['contact'];?>" id="contact" placeholder="City *">
	<input type="text" name="district" value="<?php echo $_POST['district'];?>" id="district" placeholder="Distict *">
	<input type="text" name="state" value="<?php echo $_POST['state'];?>" id="state" placeholder="State *">
	<input type="text" name="country" value="<?php echo $_POST['country'];?>" id="country" placeholder="Country *">
	<input type="text" name="phone" id="phone" value="<?php echo $_POST['phone'];?>" placeholder="Phone No. *">
	<input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>" placeholder="Email *">
	<input type="text" name="collage" id="collage" value="<?php echo $_POST['collage'];?>" placeholder="Name of Institution / Organisation *">
	<input type="text" name="coladd" id="colladd" value="<?php echo $_POST['coladd'];?>" placeholder="Address of Institution / Organisation *">
	<label>Category of Participation</label>
	  <input style="margin-bottom:30px;" type="radio"  name="category" id="category" class="" value="Student" <?php if (isset($_POST[ 'category']) && $_POST[ 'category']=='Student' ){echo ' checked="checked"';}?>>Student
	  <input type="radio"  name="category" id="category" class="" value="Teacher/Professor" <?php if (isset($_POST[ 'category']) && $_POST[ 'category']=='Teacher/Professor' ){echo ' checked="checked"';}?>>Teacher/Professor
	  <input type="radio"  name="category" id="category" class="" value="Working Professional" <?php if (isset($_POST[ 'category']) && $_POST[ 'category']=='Working Professional' ){echo ' checked="checked"';}?>> Working Professional
	  <input type="radio"  name="category" id="category" class="" value="Volunteer" <?php if (isset($_POST[ 'category']) && $_POST[ 'category']=='Volunteer' ){echo ' checked="checked"';}?>>Volunteer
	  <input type="radio"  name="category" id="category" class="" value="Other" <?php if (isset($_POST[ 'category']) && $_POST[ 'category']=='Other' ){echo ' checked="checked"';}?>>Other
	  <label><strong>Have you attended any SPIC MACAY Convention before?</strong><br>SPIC MACAY organises State/National/International Conventions every year. Have you attended any before? However, attending Conventions in the past is not the criteria for eligibility in the participation of the 4th Internationl Convention.</label>
	  <input style="margin-bottom:30px;" type="radio"  name="message" id="message" value="Yes" <?php if (isset($_POST[ 'message']) && $_POST[ 'message']=='Yes' ){echo ' checked="checked"';}?>>Yes
	  <input type="radio"  name="message" id="message" class="" value="No" <?php if (isset($_POST[ 'message']) && $_POST[ 'message']=='No' ){echo ' checked="checked"';}?>>No 
	  <label><strong>The options for heritage trip are Kamakhya Temple, Umananda Temple and Majuli island. Would you like to opt for Majuli island?</strong><br>In case you wish to opt for Majuli island, the convention ends on 17th May 2016 for you. So it is requested for these volunteers/delegates to book the return journey accordingly.</label>
	  <p style="color:red">Entry for heritage trip is now closed. We have already crossed the number for this heritage trip.</p>
	  <input style="margin-bottom:30px;" type="radio"  name="majuli" id="majuli" value="Yes" <?php if (isset($_POST[ 'majuli']) && $_POST[ 'majuli']=='Yes' ){echo ' checked="checked"';}?>>Yes
	  <input type="radio"  name="majuli" id="majuli" class="" value="No" <?php if (isset($_POST[ 'majuli']) && $_POST[ 'majuli']=='No' ){echo ' checked="checked"';}?>>No

	</fieldset>
	<fieldset>
	<legend><span class="number">2</span> Additional Info</legend>
	<input type="text" name="fac" id="fac" class="" value="<?php echo $_POST['fac'];?>" placeholder="Name of the Accompanying Teacher">
	<input type="text" name="phfac" id="phfac" class="" value="<?php echo $_POST['phfac'];?>" placeholder="Contact Number of the Teacher">
	<input type="email" name="emailfac" id="emailfac" class="" value="<?php echo $_POST['emailfac'];?>" placeholder="Email ID of the Teacher">
	<img  style="width:30%;min-width:50px;"  id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
		<a href="#"onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false"><img style="margin-left:5%;margin-bottom:3%;min-width:40px;" src="securimage/refresh.png"></a>
		<input type="text" name="captcha_code" size="10" maxlength="6"/>
	</fieldset>
	<input type="submit" value="Register" />
	</form>
	</div>
	 <div id="success">Thank you for registering with Spic Macay!<br>Our Volunteer will contact you soon.</div>
	 
    
<?php
include_once 'securimage/securimage.php';
$securimage = new Securimage();

##############################################################################################################

//db connect
	$link = mysqli_connect("localhost", "spmacay", "spmacay@671", "spicmacayDb");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	if (empty($_POST["first_name"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">First Name is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["last_name"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Last Name is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["gender"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Gender is Required</div>
	    	<?php
	        }
			 else if (empty($_POST["age"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Age is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["contact"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Name of City is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["district"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">District name is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["state"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">State name is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["country"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Country name is Required</div>
			<?php
	        }
	        else if (empty($_POST["phone"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Phone No. is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["email"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Email is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["collage"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Collage Name is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["coladd"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">College Address is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["category"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Category of participant is Required</div>
	    	<?php
	        }
	        else if (empty($_POST["message"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
				margin-right: 28% !important;
	        }
	        </style>';
	    	?>	
		    	<div id="error">Select No if you have not attended any SPIC MACAY Convention before.</div>
	    	<?php
	        }
	        else if (empty($_POST["captcha_code"])) {
	    	echo '<style type="text/css">
	        #error {
	            display: block;
	        }
	        </style>';
	    	?>			
		    	<div id="error">Captcha code is Required</div>
	    	<?php
	        }
        }
    	if(!empty($_POST)){
	
	 
	// Escape user inputs for security
	
        $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
        $last_name  = mysqli_real_escape_string($link, $_POST['last_name']);
        $name = $first_name . "&nbsp;" . $last_name;
		$collage      = mysqli_real_escape_string($link, $_POST['collage']);
		$coladd      = mysqli_real_escape_string($link, $_POST['coladd']);
        $email      = mysqli_real_escape_string($link, $_POST['email']);
        $phone      = mysqli_real_escape_string($link, $_POST['phone']);
		$age      = mysqli_real_escape_string($link, $_POST['age']);
		$gender      = mysqli_real_escape_string($link, $_POST['gender']);
		$contact      = mysqli_real_escape_string($link, $_POST['contact']);
		$district      = mysqli_real_escape_string($link, $_POST['district']);
		$state      = mysqli_real_escape_string($link, $_POST['state']);
		$country      = mysqli_real_escape_string($link, $_POST['country']);
        $category    = mysqli_real_escape_string($link, $_POST['category']);
        $message    = mysqli_real_escape_string($link, $_POST['message']);
		$majuli    = mysqli_real_escape_string($link, $_POST['majuli']);
        $fac    = mysqli_real_escape_string($link, $_POST['fac']);
		$phfac    = mysqli_real_escape_string($link, $_POST['phfac']);
		$emailfac    = mysqli_real_escape_string($link, $_POST['emailfac']);
		$captcha 	= mysqli_real_escape_string($link, $_POST['captcha_code']);
        $filtered_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $filtered_email = filter_var($emailfac, FILTER_VALIDATE_EMAIL);
		
        if(!empty($first_name) && !empty($last_name) && !empty($collage)&& !empty($coladd)&& !empty($email) && !empty($phone)&& !empty($gender)&& !empty($contact)&& !empty($district)&& !empty($state)&& !empty($country)&& !empty($category) && !empty($message) && !empty($captcha) )
        {
            //insert the data into DB
		// attempt insert query execution
		$sql = "INSERT INTO contact (id, name,first_name, last_name, collage, coladd, email, phone, age, gender, contact, district, state, country, category, positions, fac, phfac, emailfac ) VALUES (NOW(), '".$name."', '".$first_name."', '".$last_name."', '".$collage."',
					 '".$coladd."', '".$email."', '".$phone."',
                   '".$age."', '".$gender."', '".$contact."',
				    '".$district."', '".$state."', '".$country."', '".$category."',
                   '".$message."', '".$fac."', '".$phfac."', '".$emailfac."' )";
                   
		
		if(mysqli_query($link, $sql)){
		    echo "";
		} else{
		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	
	echo '<style type="text/css">
        #success {
            display: block;
        }
        .form-style-5{
             display: none;
        }
        #fields{
            display: none;
        }
        </style>';
        echo '<style type="text/css">
        #error {
            display: none;
        }
        </style>';
        }    
	    
    }
?>
</body>
</html>