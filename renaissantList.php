<?php include 'connection.php'; ?>
<?php include "routes.php"; ?>
<?php
if(isset($_GET['lid'])){
    $left_id = $_GET['lid'];
}else{
    $statement_first = $conn->prepare("SELECT * FROM `tbl_left` WHERE root_id = 2 LIMIT 0,1");
    $statement_first->execute(array(':left_id'=>$left_id));
    $row = $statement_first->fetch(PDO::FETCH_ASSOC);
    $left_id = $row['id'];
}

$left_count = "";
//Fetch Prothemus
$statement_left = $conn->prepare("SELECT s.*,l.left_type_name FROM `tbl_subtype` AS s
INNER JOIN tbl_left AS l ON l.id = s.left_id
WHERE left_id = :left_id AND s.status = 0");
$statement_title = $conn->prepare("SELECT s.*,l.left_type_name FROM `tbl_subtype` AS s
INNER JOIN tbl_left AS l ON l.id = s.left_id
WHERE left_id = :left_id AND s.status = 0");
$statement_left->execute(array(':left_id'=>$left_id));
$statement_title->execute(array(':left_id'=>$left_id));
$statement_table = $conn->prepare("SELECT s.*,l.left_type_name FROM `tbl_subtype` AS s
INNER JOIN tbl_left AS l ON l.id = s.left_id
WHERE left_id = :left_id AND s.status = 0");
$statement_table->execute(array(':left_id'=>$left_id));
$table_count = $statement_table->rowCount();
$left_count = $statement_left->rowCount();
//For DIV
$div_count="";
$statement_div = $conn->prepare("SELECT s.*,l.left_type_name FROM `tbl_subtype` AS s
INNER JOIN tbl_left AS l ON l.id = s.left_id
WHERE left_id = :left_id AND s.status = 0");
$statement_div->execute(array(':left_id'=>$left_id));
$div_count = $statement_div->rowCount();
function getTitle($title_id){
    $title_name = "";
    switch ($title_id){
        case 1: $title_name = "Kids";
            break;
        case 2: $title_name = "Pregnant & Loctating Mothers";
            break;
        case 3: $title_name = "Glucose Management Powders";
            break;
        case 4: $title_name = "Malt Based Supplements";
            break;
        case 5: $title_name = "Glucose Management Diskettes";
            break;
        case 6: $title_name = "Women";
            break;
        case 7: $title_name = "Elderly";
            break;
        case 8: $title_name = "Liver Supplement";
            break;
        case 9: $title_name = "Cardiovascular Wellness";
            break;
        case 10: $title_name = "Bone & Joint";
            break;
        case 11: $title_name = "Intellect Promotor/Nootropics";
            break;
        case 12: $title_name = "Hair, Skin & Nails";
            break;
        case 13: $title_name = "Weight Management";
            break;
        case 14: $title_name = "Multivitamin & Antioxidant";
            break;
        case 15: $title_name = "Anxity, stress and mood";
            break;
        case 16: $title_name = "Vigour, vitality & sexual enhancement";
            break;
        case 17: $title_name = "Digestion & liver care";
            break;
        case 18: $title_name = "CardioVascular Wellness";
            break;
        case 19: $title_name = "Anti Oxidant";
            break;
        case 20: $title_name = "Ayurvadic & Herbal Product";
            break;
        case 21: $title_name = "Respioratory Health";
            break;
        case 22: $title_name = "Cosmeceaticals & Personal Care";
            break;
        case 23: $title_name = "Face care";
            break;
        case 24: $title_name = "Skin/Body Care";
            break;
        case 25: $title_name = "Skin Care";
            break;
        case 26: $title_name = "Oral Care";
            break;
        case 27: $title_name = "Body Care";
            break;
        case 28: $title_name = "General Care";
            break;
        case 29: $title_name = "Phytochemicals";
            break;
        case 30: $title_name = "Cosmeceuticals Ingradients";
            break;
        case 31: $title_name = "SCFE Products";
            break;
        case 32: $title_name = "Sproy Dried Powders";
            break;
        case 33: $title_name = "Natural Food colors";
            break;
        case 34: $title_name = "Oils & Oleoresins";
            break;
    }
	return $title_name;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $projectName ?>| Renaissant </title>
    <?php include "assetCss.php"; ?>
  </head>
  <body>
    <?php include "header.php"; ?>
    <div class="innerpageBanner animated flipInX bannerimg-renaissanList">
      <!-- <img src="images/renaissant.png" alt="promethus"> -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center caption-container caption-bottom">
            <div class="caption-ovelay color-turquoise caption-box">
              <h3>
              Ailing &amp; Alleviating naturally. Assurity of  purity and potency. 
              </h3>
            </div>
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
            <h3>RENAISSANT - <?php if(isset($left_count)){ if($left_count>0){ $row =  $statement_title->fetch(); echo $row['left_type_name']; } } ?></h3>
<div class="table-responsive">
  <ul id="nav_bar" class="nav nav-pills floatingnav" role="tablist" >
    <?php if(isset($left_count)){ if($left_count>0){ $count = 0; while($row = $statement_left->fetch(PDO::FETCH_ASSOC)){  ?>
      <li role="presentation" <?php if($count == 0){   echo 'class="active"'; } ?>><a href="<?php echo '#'.$row['id']; ?>" aria-controls="<?php echo $row['id']; ?>" role="tab" data-toggle="tab"><?php echo $row['subtype_name']; ?></a></li>
    <?php $count++; } }else{ echo '<p><strong>Coming Soon</strong></p>'; } } ?>
  </ul>
  <br>
  <div class="tab-content">
    <?php if(isset($div_count)){ $count = 0; while($row = $statement_div->fetch(PDO::FETCH_ASSOC)){  ?>
    <div role="tabpanel" class="tab-pane <?php if($count == 0){ echo 'active'; } ?>" id="<?php echo $row['id']; ?>">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr class="table-heading">
            <td rowspan="1" colspan="4"><?php echo $row['subtype_name']; ?></td>
          </tr>
		  <tr class="table-heading">
            <td>Sr. No</td>
			<td>Product</td>
			<td>Benefits/Bioactives</td>
			<td>Available In/Benefits</td>
          </tr>
          <?php
            $data_count = "";
            $statement_data = $conn->prepare("SELECT * FROM `tbl_data` WHERE sub_id=:sub_id AND status = 0");
            $statement_data->execute(array(':sub_id'=>$row['id']));
            $data_count = $statement_data->rowCount();
          ?>
          <?php if(isset($data_count)){ if($data_count>0){ $count = 0; while($row = $statement_data->fetch(PDO::FETCH_ASSOC)){  ?>
          <?php if($row['title_id'] != 0){ ?>
          <?php if($count == 0){ ?>
          <tr class="table-heading">
              <td colspan="4"><?php echo getTitle($row['title_id']); ?></td>
          </tr>
          <?php }else{ ?>
            <?php if($row['title_id'] != $old_id){ ?>
            <tr class="table-heading">
                <td colspan="4"><?php echo getTitle($row['title_id']); ?></td>
            </tr>
            <?php } ?>
          <?php } $old_id = $row['title_id']; ?>
          <?php } ?>
          <tr>
            <td width="16"><?php echo ++$count; ?></td>
            <td width="463"><?php echo $row['title']; ?></td>
            <td width="378"><?php echo $row['does_potency']; ?></td>
            <td width="215"><?php echo $row['does_type']; ?> </td>
          </tr>
          <?php } }else{ echo '<tr><td colspan=4>No rows found</td></tr>'; } } ?>
        </tbody>
      </table>
    </div>
    <?php $count++; } } ?>
  </div>

  </div>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<?php include "assetJs.php"; ?>
<script type="text/javascript" src="js/custom.js"></script>