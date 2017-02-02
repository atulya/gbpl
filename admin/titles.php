<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Titles for Drug</h1>
        </div>
    </div><!--/.row-->
    <!--Fetch All enquiry from DB-->

<?php
    $row_count = "";
    $statement = $conn->prepare("SELECT * FROM tbl_title");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
				
                <div class="panel-heading"><button  type="button" class="btn btn-primary" onclick="insertM()">Add Title</button></div>
                
				<div class="panel-body">
				<?php if(isset($_GET['update'])){ echo '<div class="alert alert-success">Category is updated successfully.</div>'; } ?>
                <?php if(isset($_GET['type'])){ echo '<div class="alert alert-success">Title is added successfully.</div>'; } ?>
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Unique ID</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                            <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $row['title']; ?><input value="<?php echo $row['title']; ?>" type="hidden" id="title_<?php echo $row['id']; ?>" /></td>
                                <td><?php echo $row['id']; ?></td>
								<td><a onclick="updateM(<?php echo $row['id']; ?>)">Update</a></td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div><!--/.main-->
<?php include "footer.php"; ?>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Title</h4>
        </div>
        <div class="modal-body">
          <form action="insertController.php" method="POST">
                                <label class="control-label">Title</label>
                                <div class="">
									<input type="hidden" name="title_id" id="title_id" >
                                    <input type="text" value="<?php if(isset($row_data)){ echo $row_data['does_type']; } ?>" name="title" id="title" required="required" class="form-control" placeholder="Title">
                                </div>
                            <label class="control-label"></label>
                            <div class="">
                                <input type="submit" name="insertTitle" id="insertTitle" class="btn btn-primary" value="Submit">
                            </div>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <script>
	function updateM(id){
		var elem = document.getElementById("insertTitle");
		document.getElementById("title_id").value=id;
		var field_value = document.getElementById("title_"+id).value;
		document.getElementById("title").value = field_value;
		elem.value = "Update";
		$("#myModal").modal();
	}
	function insertM(){
		var elem = document.getElementById("insertTitle");
		document.getElementById("title").value = "";
		elem.value = "Submit";
		$("#myModal").modal();
	}
  </script>