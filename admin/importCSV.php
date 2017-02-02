<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Import CSV</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <?php if(isset($_GET['count'])){ echo '<div class="alert alert-success">Total '.$_GET['count'].' rows imported successfully.</div>'; } ?>
                        <form autocomplete="off" role="form" enctype="multipart/form-data" id="importFrm" method="POST" action="importController.php" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select CSV file</label>
                                <div class="col-sm-10">
                                    <input type="file" name="csv" accept=".csv" class="form-control" />
                                </div>
                            </div>
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" name="import" class="btn btn-primary" value="Submit">
                                <input type="button" class="btn btn-default" value="Cancel">
                            </div>

                        </form>    
                    </div>
                    <div class="col-md-12">
                        <h3>Steps for create CSV file</h3>
                        <p>There are total 5 columns we have to add in CSV file.</p>
                        <p>Step 1 : First column for <a href="viewSubType.php">Sub Type</a> where you have to add sub type <b>Unique ID</b> for that medication data.</p>
                        <p>Step 2 : Second column for <b>Title</b> of Drug.</p>
                        <p>Step 3 : Third column for <b>Does Potency</b> of Drug.</p>
                        <p>Step 4 : Fourth column for <b>Does Type</b> of Drug.</p>
                        <p>Step 5 : Fifth column for <b>Sub type of Drug</b> that drug unique ID you can find from this <a href="titles.php">link</a>.  IF sub type of drug is not there so please write <b>default 0</b>.</p>
                        <p>Step 6 : <b>Most Important</b> step is after add all data in 4 columns make sure that every column don't have <b>','</b> value, If there <b>','</b> then replace with any other character.</p>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
</div><!--/.main-->
<?php include "footer.php"; ?>