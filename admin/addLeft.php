<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<?php
    if(isset($_GET['left_id'])){
		$statement = $conn->prepare("SELECT l.id,l.left_type_name,r.root_name,r.id AS rid FROM tbl_left AS l 
	INNER JOIN tbl_root AS r ON r.id = l.root_id WHERE l.status = 0 AND l.id = :left_id");
		$statement->execute(array(':left_id'=>$_GET['left_id']));
		$row = $statement->fetch(PDO::FETCH_ASSOC);
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php if(isset($row)){ echo "Update"; }else{ echo "Add"; } ?> Left Bar Name</h1>
        </div>
    </div><!--/.row-->
	
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form autocomplete="off" role="form" method="POST" action="<?php if(isset($row)){ echo "updateController.php"; }else{ echo "insertController.php"; } ?>" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Root Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="root_id">
                                        <option value="1" <?php if(isset($row)){ if($row['rid'] == 1){ echo "selected"; } } ?>>Promethus</option>
                                        <option value="2" <?php if(isset($row)){ if($row['rid'] == 2){ echo "selected"; } } ?>>Renaissant</option>
                                        <option value="3" <?php if(isset($row)){ if($row['rid'] == 3){ echo "selected"; } } ?>>Hemera</option>
                                        <option value="4" <?php if(isset($row)){ if($row['rid'] == 4){ echo "selected"; } } ?>>Zooker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Left Bar Name</label>
                                <div class="col-sm-10">
									<input type="hidden" value="<?php if(isset($row)){ echo $row['id']; } ?>" name="lid" />
                                    <input type="text" name="left_name" value="<?php if(isset($row)){ echo $row['left_type_name']; } ?>" required="required" class="form-control" placeholder="Left Bar Name">
                                </div>
                            </div>
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" name="insertLeft" class="btn btn-primary" value="Submit">
                                    <input type="button" class="btn btn-default" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->
<?php include "footer.php"; ?>