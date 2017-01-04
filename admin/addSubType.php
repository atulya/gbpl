<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<?php
    if(isset($_GET['sub_id'])){
		$statement = $conn->prepare("SELECT s.id,s.subtype_name,l.left_type_name,r.root_name FROM tbl_left AS l 
INNER JOIN tbl_root AS r ON r.id = l.root_id
INNER JOIN tbl_subtype AS s ON s.left_id = l.id WHERE s.status = 0 AND s.id = :sub_id");
		$statement->execute(array(':sub_id'=>$_GET['sub_id']));
		$row = $statement->fetch(PDO::FETCH_ASSOC);
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php if(isset($row)){ echo "Update"; }else{ echo "Add"; } ?> Sub Type Name</h1>
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
                                    <select class="form-control" onchange="fetchLeft()" id="root_id" name="root_id">
                                        <option value="0">Select Type</option>
                                        <option value="1">Promethus</option>
                                        <option value="2">Renaissant</option>
                                        <option value="3">Hemera</option>
                                        <option value="4">Zooker</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Left Bar Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="left_id" id="left_id">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sub Type Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php if(isset($row)){ echo $row['subtype_name']; } ?>" name="sub_name" required="required" class="form-control" placeholder="Left Bar Name">
									<input type="hidden" value="<?php if(isset($row)){ echo $row['id']; } ?>" name="sid" />
                                </div>
                            </div>
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" name="insertSub" class="btn btn-primary" value="Submit">
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
<script>
    function fetchLeft() {
        var root = document.getElementById('root_id').value;
        var select = document.getElementById('left_id');
        if (root != 0) {
            $.ajax({
                url: 'insertController.php',
                data: {root: root},
                type: 'post',
                success: function (data) {
                    $('#left_id').empty();
                    if(data != ""){
                        var arr;
                        arr = data.split(',');
                        var len = arr.length;
                        var i = 0;
                        var j = 0;
                        var max = (len/2);
                        while (j < max) {
                            var opt = document.createElement('option');
                            opt.value = arr[i];
                            i=i+1;
                            opt.text = arr[i];
                            select.appendChild(opt);
                            i=i+1;
                            j = j + 1;
                        }
                    }
                    
                }
            });
        }
    }
</script>