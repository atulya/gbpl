<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Root Types</h1>
        </div>
    </div><!--/.row-->
    <!--Fetch All enquiry from DB-->

<?php
    $row_count = "";
    $statement = $conn->prepare("SELECT * FROM `tbl_root`");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of Root Types</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Root Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                            <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $row['root_name']; ?></td>
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