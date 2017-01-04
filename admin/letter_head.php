<?php include 'connection.php'; ?>
<?php include "header.php"; ?>
<?php include "topmenu.php"; ?>
<?php include "sidebar.php"; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Letter Head</h1>
        </div>
    </div><!--/.row-->
    <!--Fetch All enquiry from DB-->

<?php
    $row_count = "";
    $statement = $conn->prepare("SELECT id,email,(CASE WHEN `promethus` = 1 THEN 'Yes' ELSE 'No' END) AS pro, (CASE WHEN `renaissant` = 1 THEN 'Yes' ELSE 'No' END) AS ren, (CASE WHEN `hemera` = 1 THEN 'Yes' ELSE 'No' END) AS hem,(CASE WHEN `zooker` = 1 THEN 'Yes' ELSE 'No' END) AS zook, added_on FROM `tbl_letter` ORDER BY added_on DESC");
    $statement->execute();
    $row_count = $statement->rowCount();
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of Letter Head</div>
                <div class="panel-body">
                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Email Address</th>
                                <th>Promethus</th>
                                <th>Renaissant</th>
                                <th>Hemera</th>
                                <th>Zooker</th>
                                <th>Added On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($row_count)){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
                            <tr>
                                <td><?php echo ++$count; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['pro']; ?></td>
                                <td><?php echo $row['ren']; ?></td>
                                <td><?php echo $row['hem']; ?></td>
                                <td><?php echo $row['zook']; ?></td>
                                <td><?php echo $row['added_on']; ?></td>
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