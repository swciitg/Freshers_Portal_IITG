 <style>
 body > section {
  padding: 0 0;
}
#feature {
  background: #f2f2f2;
  padding-bottom: 0px;
}
</style>

	<section id="feature" class="transparent-bg">
        <div class="container">
        <div class="center wow fadeInDown" style="margin-bottom:0%;padding-bottom:60px;padding-top:50px;width:40%;margin:auto;min-width:240px;">
           <img src="../freshers/res/images/headings/au.jpg" alt="Departments" width="100%" height="80" align="center"> 
        </div> 

		    <div class="row" style="text-align:center;width:90%;margin:auto">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="https://www.iitg.ac.in/biotech/faculty/4c323d75cd5c297c542f9ac81b9399ad.jpg" class="img-circle" alt="">
                       <h3><strong>Prof. Venkata Dasu</strong><br>Dean, Students' Affairs<br>Contact: 0361-2582083 (O)<br>Email: dos@iitg.ernet.in</h3>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="../freshers/res/images/cma.jpg" class="img-circle" alt="">
                        <h3><strong>Prof. Mallikarjuna C.</strong><br>Associate Dean-1, SA<br>Contact: 0361-2582929 (O)<br>Email: adosa_1@iitg.ernet.in</h3>
                    </div>
                </div>
				<div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="https://www.iitg.ac.in/hss/docs/faculty/abarua.JPG" class="img-circle" alt="">
                        <h3><strong>Prof. Anamika Barua</strong><br>Associate Dean-2, SA<br>Contact: 0361-2582928 (O)<br>Email: adosa_2@iitg.ernet.in</h3>
                    </div>
                </div>
			</div>
        </div><!--/.container-->
    </section><!--/#feature-->
    <script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
	<section id="contact-page">
        <div class="container" style="margin-bottom:5%;">
            <div class="center">        
                <h2>Drop Your Message</h2>
            </div> 
            <div class="row contact-wrap"> 
                <form id="main-contact-form" class="contact-form" name="contactform" method="post" action="thankyou.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label for="full_name">Name *</label>
                            <input type="text" id="full_name" name="full_name" class="form-control" required="required" >
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" class="form-control" required="required">
                        </div> 
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="number" id="phone" name="phone" class="form-control" required="required">
                        </div>                       
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea name="message" placeholder="Include your branch and program with your query" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required" style="float:right;">Submit Message</button>
                        </div>
                    </div>
                </form> 
				<script language="JavaScript">
				// Code for validating the form
				// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
				// for details
				var frmvalidator  = new Validator("contactform");
				frmvalidator.addValidation("full_name","req","Please provide your name"); 
				frmvalidator.addValidation("email","req","Please provide your email"); 
				frmvalidator.addValidation("email","email","Please enter a valid email address"); 
				</script>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
   <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7160.0831695202005!2d91.69587721957393!3d26.19532549151789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0bf481e3cfc490e1!2sIndian+Institute+of+Technology+Guwahati!5e0!3m2!1sen!2sin!4v1436140279070" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content" style="padding-top:80px;">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Academic Affairs</h5>
                                    <p>Administrative Building<br>
                                    IIT Guwahati</p>
                                    <p>Guwahati, Assam-781039</p><p>Email: acadoff@iitg.ernet.in</p>
								</address>
                            </li>
                        </ul>

			<ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Students' Affairs (Non- Academic)</h5>
                                    <p>Administrative Building<br>
                                    IIT Guwahati</p>
                                    <p>Guwahati, Assam-781039</p><p>Email: saoff@iitg.ernet.in</p>
								</address>
                            </li>
                        </ul>
                    </div>

			
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
