<?php include 'connection.php'; ?>
<?php include "routes.php"; ?>
<?php
if(isset($_POST['searchRecord'])){
	$key = $_POST["keyword"];
	$product = $_POST["product_category"];
	$does_type = $_POST["does_type"];
	if($product == 0){
		$product = "";
	}
	if($does_type == 0){
		$does_type = "";
	}
	//Fetch Search Result
$row_count="0";
$search_query = 'SELECT d.title, d.does_potency, d.does_type FROM tbl_data AS d
INNER JOIN tbl_subtype AS s ON s.id = d.sub_id
INNER JOIN tbl_left AS l ON l.id = s.left_id
INNER JOIN tbl_root AS r ON r.id = l.root_id
WHERE (d.title LIKE "%'.$key.'%" OR d.does_potency LIKE "%'.$key.'%" OR d.does_type LIKE "%'.$key.'%") AND d.does_type LIKE "%'.$does_type.'%" AND r.id LIKE "%'.$product.'%" LIMIT 0,75';
$statement_search = $conn->prepare($search_query);
	$result = $statement_search->execute();
	$row_count = $statement_search->rowCount();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Search Result </title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner">
      <img src="images/promethusBanner.png" alt="promethus">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>
            Critical care to chronic care therapy areas
            </h3>
          </div>
        </div>
      </div>
    </div>
    <?php include "news.php"; ?>
    <?php include "Requestaquote.php"; ?>
    <div class="container">
      <div class="row innerContent productShowCase">
        <div class="col-md-3">
          <?php include "weOffer.php"; ?>
          <?php include "overview.php"; ?>
          <?php include "sidebarSlider.php"; ?>          
          
        </div>
        <div class="col-md-9">
            <h3>Search Result</h3>
<div class="table-responsive">
  <br>
  <div class="tab-content">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr class="table-heading">
            <td rowspan="1" colspan="4"><?php if(isset($row_count)){ echo $row_count." Found."; } ?></td>
          </tr>
          <?php if(isset($row_count)){ if($row_count>0){ $count = 0; while($row = $statement_search->fetch(PDO::FETCH_ASSOC)){  ?>
          <tr>
            <td><?php echo ++$count; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['does_potency']; ?></td>
            <td><?php echo $row['does_type']; ?> </td>
          </tr>
          <?php } }else{ echo '<tr><td colspan=4>No rows found</td></tr>'; } } ?>
        </tbody>
      </table>
	  </div>
  </div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>
<script type="text/javascript" src="js/custom.js"></script>