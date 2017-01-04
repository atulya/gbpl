<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<?php
    if(isset($_GET['data_id'])){
		$statement = $conn->prepare("SELECT d.id,d.title,d.does_potency,d.does_type,s.subtype_name,l.left_type_name FROM `tbl_data` AS d
INNER JOIN tbl_subtype AS s ON s.id = d.sub_id
INNER JOIN tbl_left AS l ON l.id = s.left_id WHERE l.root_id = 2 AND d.status = 0 AND d.id = :data_id");
		$statement->execute(array(':data_id'=>$_GET['data_id']));
		$row_data = $statement->fetch(PDO::FETCH_ASSOC);
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php if(isset($row_data)){ echo "Update"; }else{ echo "Add"; } ?> Renaissant</h1>
        </div>
    </div><!--/.row-->
    <?php
    $row_count = "";
    $statement = $conn->prepare("SELECT `left_type_name`,`id` FROM `tbl_left` WHERE `root_id`=2");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form autocomplete="off" role="form" method="POST" action="<?php if(isset($row_data)){ echo "updateController.php"; }else{ echo "insertController.php"; } ?>" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Left Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" onchange="fetchSub()" id="left_id" name="left_id">
                                        <option value="0">Select Left Type</option>
                                        <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['left_type_name'] ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Sub Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sub_id" id="sub_id">
                                    </select>
                                </div>
                            </div>
							<?php $arr = array('Kids','Pregnant & Loctating Mothers',
												'Glucose Management Powders','Malt Based Supplements',
												'Glucose Management Diskettes','Women',
												'Elderly','Liver Supplement','Cardiovascular Wellness',
												'Bone & Joint','Intellect Promotor/Nootropics','Hair, Skin & Nails','Weight Management',
												'Multivitamin & Antioxidant','Anxity, stress and mood','Vigour, vitality & sexual enhancement',
												'Digestion & liver care','CardioVascular Wellness','Anti Oxidant',
												'Ayurvadic & Herbal Product','Respioratory Health','Cosmeceaticals & Personal Care',
												'Face care','Skin/Body Care','Skin Care','Oral Care','Body Care','General Care',
												'Phytochemicals','Cosmeceuticals Ingradients','SCFE Products','Sproy Dried Powders',
												'Natural Food colors','Oils & Oleoresins'); ?>
							<div class="form-group">
                                <label class="col-sm-2 control-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select name="category" class="form-control">
										<option value="0">No Category</option>
										<?php $count = 0; foreach($arr as $x){ ?>
										<option value="<?php echo ++$count; ?>"><?php echo $x; ?></option>
										<?php } ?>
									</select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php if(isset($row_data)){ echo $row_data['title']; } ?>" name="title" required="required" class="form-control" placeholder="Title">
									<input type="hidden" value="<?php if(isset($row_data)){ echo $row_data['id']; } ?>" name="did" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Does Potency</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php if(isset($row_data)){ echo $row_data['does_potency']; } ?>" name="does_potency" required="required" class="form-control" placeholder="Does Potency">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Does Type</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php if(isset($row_data)){ echo $row_data['does_type']; } ?>" name="does_type" required="required" class="form-control" placeholder="Does Type">
                                </div>
                            </div>
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" name="insertPromethus" class="btn btn-primary" value="Submit">
                                <input type="button" class="btn btn-default" value="Cancel">
                            </div>
                            <input type="hidden" name="rid" value="2">
                        </form>    
                    </div>
                    
                </div>

            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
</div><!--/.main-->
<?php include "footer.php"; ?>