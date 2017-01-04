<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hemera</h1>
        </div>
    </div><!--/.row-->
    <!--Fetch All enquiry from DB-->

<?php
    $row_count = "";
    $statement = $conn->prepare("SELECT d.id,d.title,d.does_potency,d.does_type,s.subtype_name,l.left_type_name FROM `tbl_data` AS d
INNER JOIN tbl_subtype AS s ON s.id = d.sub_id
INNER JOIN tbl_left AS l ON l.id = s.left_id WHERE l.root_id = 3 AND d.status = 0");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
				<?php if(isset($_GET['update'])){ echo '<div class="alert alert-success">Category is updated successfully.</div>'; } ?>
				<?php if(isset($_GET['res'])){ echo '<div class="alert alert-success">Category is deleted successfully.</div>'; } ?>
                <?php if(isset($_GET['type'])){ echo '<div class="alert alert-success">Medicine is added successfully.</div>'; } ?>
                <div class="panel-heading">List Hemera</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Left Bar Name</th>
                                <th>Sub Type Name</th>
                                <th>Title</th>
                                <th>Does Potency</th>
                                <th>Does Type</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                            <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $row['left_type_name']; ?></td>
                                <td><?php echo $row['subtype_name']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['does_potency']; ?></td>
                                <td><?php echo $row['does_type']; ?></td>
								<td><a href="addHemera.php?data_id=<?php echo $row['id']; ?>">Update</a> | <a href="#" onclick="askPermission(<?php echo $row['id']; ?>)">Delete</a></td>
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
		if(confirm("Are you sure?")){
			window.location.href = "deleteController.php?type=data&page=1&id="+id;
		}
	}
</script>
<?php include "footer.php"; ?>