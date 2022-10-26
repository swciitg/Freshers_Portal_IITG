<!DOCTYPE html>
<html lang="en">
<?php 
include("head.php");
include("scripts.php");
include('authenticate.php');
?>
	<body>
			<a href='logout.php'><button style="float:right;margin-right:7%;margin-top:5px;margin-bottom:5px" type="button" class="btn btn-default">Logout</button></a>
			<div id="page-wrapper">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All queries
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">Query No.</th>
                                                <th width="70%">Message</th>
                                                <th width="10%">Mail Sent</th>
                                                <th width="10%">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
											include("connect.php");
											$query1 = "SELECT * FROM query ORDER BY time DESC";
											$result1 = mysql_query($query1);
											
											while ($row = mysql_fetch_array($result1)) {
												$query_no   = $row['query_no'];
												$message = $row['message'];
                                                $query_status = $row['reply_status'];
												$reply_status = $row['reply_status'];
											?>
                                            <tr class="odd gradeX" <?php if($reply_status == "yes"){echo "style='color:green'";}?>>
												<td><?php echo "$query_no";?></td>
                                                <td><?php echo "$message";?></td>
                                                <td><?php echo "$query_status";?></td>
												<td class="center"><a href='track_query_details.php?track=<?php echo $query_no; ?>' style='color:#337ab7'>Details</a></td>
                                            </tr>
											<?php
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /#page-wrapper -->
	</div>
	</body>
</html>
