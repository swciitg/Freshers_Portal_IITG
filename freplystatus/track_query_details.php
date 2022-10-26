<?php
	error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
	ini_set("display_errors", 0);

	$id = $_GET['track'];
	include('authenticate.php');
	include("connect.php");
	$query = "SELECT * FROM query WHERE query_no = '$id'";
	$result = mysql_query($query);
	$row_track = mysql_fetch_array($result);
			
	$mail_status    = $_POST['mail_status'];
	
	if (isset($_POST['Submit'])) {
		if ($mail_status != '') {
			$success = "<font color='green'>Status successfully updated.</font>";
			mysql_query ("UPDATE query SET reply_status = 'yes' WHERE query_no = '$id'");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include("head.php");
include("scripts.php");
?>
	<body>
			<style>
			label.required:after {
				content: " *";
				color: red;
			}
			</style>
			<div id="page-wrapper">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Query no. <b><?php echo $id; ?></b>
                            </div>
                            <div class="panel-body">
								<?php 
									if($error != ''){
									?>
									  <div class="alert alert-warning">
										<?php if(isset($error)) { echo $error; }?>
									  </div>
									<?php
									}
									else if($success != ''){
									?>
									  <div class="alert alert-success">
										<?php if(isset($success)) {											
											echo $success;
										?>
										<style>
											.ongoing{
												display: none;
											}
										</style>
										<?php
										} 
										?>
									  </div>
									<?php
									}
									else{
										//echo "";
									}
								?>
								<div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <td><b>Name:</b> <?php echo $row_track["full_name"]; ?></td>
                                                <td><b>Email:</b> <?php echo $row_track["email"]; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><b>Phone Number:</b> <?php echo $row_track["phone"]; ?></td>
												<td><b>Message Time:</b> <?php echo $row_track["time"]; ?></td>
                                            </tr>
											<tr>
                                                <td colspan="2"><b>Message:</b> <?php echo $row_track["message"]; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
								<?php 
									$query = "SELECT * FROM query WHERE query_no = '$id'";
									$result = mysql_query($query);
									$row_track = mysql_fetch_array($result);
									if($row_track["reply_status"] == 'no'){
								?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" name="form1" method="POST" enctype="multipart/form-data" action="">
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="yes" name="mail_status">Mail Sent
                                                </label>
                                            </div>
											<div class="form-group col-md-12">
												<button type="submit" name="Submit" class="btn btn-default">Update Status</button>
												<a href='registrations_entry.php'><button type="button" class="btn btn-default">Back</button></a>
											</div>
                                        </form>
                                    </div>
                                </div>
								<?php } else{?>
									<a href='registrations_entry.php'><button type="button" class="btn btn-default">Back</button></a>
								<?php } ?>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
	</div>
	</body>
</html>
