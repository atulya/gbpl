<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Enquiry</h1>
        </div>
    </div><!--/.row-->
<?php
	if(isset($_GET['id'])){
		$id  = $_GET['id'];
	}
    $row_count = "";
    $statement = $conn->prepare("SELECT * FROM tbl_enquiry WHERE id = :id");
    $statement->execute(array(':id'=>$id));
    $row_count = $statement->rowCount();
	$row = $statement->fetch(PDO::FETCH_ASSOC);
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            <label>Department</label>
                            <p><?php echo $row['department'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Subject</label>
                            <p><?php echo $row['subject'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Title</label>
                            <p><?php echo $row['title'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Full Name</label>
                            <p><?php echo $row['full_name'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Email</label>
                            <p><?php echo $row['email'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Phone</label>
                            <p><?php echo $row['phone'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Cell No</label>
                            <p><?php echo $row['cell_no'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Address</label>
                            <p><?php echo $row['address'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Country</label>
                            <p><?php echo $row['country'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>City</label>
                            <p><?php echo $row['city'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>State</label>
                            <p><?php echo $row['state'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Company Name</label>
                            <p><?php echo $row['company_name'] ?></p>
                        </div>
                        <div class="row">&nbsp;</div>
                        <div class="row">
                            <label>Comment</label>
                            <p><?php echo $row['comment'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div><!--/.main-->
<?php include "footer.php"; ?>