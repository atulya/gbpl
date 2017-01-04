<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Left Bar Types</h1>
        </div>
    </div><!--/.row-->
    <!--Fetch All enquiry from DB-->

<?php
    $row_count = "";
    $statement = $conn->prepare("SELECT l.id,l.left_type_name,r.root_name FROM tbl_left AS l 
INNER JOIN tbl_root AS r ON r.id = l.root_id WHERE l.status = 0");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
				<?php if(isset($_GET['update'])){ echo '<div class="alert alert-success">Category is updated successfully.</div>'; } ?>
				<?php if(isset($_GET['res'])){ echo '<div class="alert alert-success">Category is deleted successfully.</div>'; } ?>
                <?php if(isset($_GET['type'])){ echo '<div class="alert alert-success">Left Bar Type is added successfully.</div>'; } ?>
                <div class="panel-heading">List of Left Bar Types</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Root Name</th>
                                <th>Left Bar Name</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                            <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $row['root_name']; ?></td>
                                <td><?php echo $row['left_type_name']; ?></td>
								<td><a href="addLeft.php?left_id=<?php echo $row['id']; ?>">Update</a> | <a href="#" onclick="askPermission(<?php echo $row['id']; ?>)">Delete</a></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div><!--/.main-->
<script>
	function askPermission(id){
		if(confirm("Are you sure? Because it will delete all dependasis related to this category.")){
			window.location.href = "deleteController.php?type=left&id="+id;
		}
	}
</script>
<?php include "footer.php"; ?>