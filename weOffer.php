<?php
$pro_count = "";
//Fetch Prothemus
$statement = $conn->prepare("SELECT * FROM `tbl_left` WHERE root_id = 1 AND status = 0");
$statement->execute();
$pro_count = $statement->rowCount();
$zoo_count = "";
//Fetch Zooker
$statement2 = $conn->prepare("SELECT * FROM `tbl_left` WHERE root_id = 4 AND status = 0");
$statement2->execute();
$zoo_count = $statement2->rowCount();
$ren_count = "";
//Fetch RENAISSANT
$statement3 = $conn->prepare("SELECT * FROM `tbl_left` WHERE root_id = 2 AND status = 0");
$statement3->execute();
$ren_count = $statement3->rowCount();
$hem_count = "";
//Fetch HEMERA
$statement4 = $conn->prepare("SELECT * FROM `tbl_left` WHERE root_id = 3 AND status = 0");
$statement4->execute();
$hem_count = $statement4->rowCount();
?>
<ul class="sideBar">
    <li><a class="navHeading" href="javascript:void(0);">PROMETHUS</a>
        <ul class="sideBar">
            <?php if(isset($pro_count)){ if($pro_count>0){ $count=0; while($row = $statement->fetch(PDO::FETCH_ASSOC)){  ?>
            <li><a href="promethusList.php?lid=<?php echo $row['id']; ?>"><strong><?php echo $row['left_type_name']; ?></strong></a></li>
            <?php } }else{ echo '<li><a><strong>Coming Soon</strong></a></li>'; } } ?>
        </ul>
    </li>
    <li><a class="navHeading"  href="javascript:void(0);">Zooker</a>
        <ul class="sideBar">
            <?php if(isset($zoo_count)){ if($zoo_count>0){ $count=0; while($row = $statement2->fetch(PDO::FETCH_ASSOC)){  ?>
            <li><a href="zookerList.php?lid=<?php echo $row['id']; ?>"><strong><?php echo $row['left_type_name']; ?></strong></a></li>
            <?php } }else{ echo '<li><a><strong>Coming Soon</strong></a></li>'; } } ?>
        </ul>
    </li>
    <li><a class="navHeading"  href="javascript:void(0);">RENAISSANT</a>
        <ul class="sideBar">
            <?php if(isset($ren_count)){ if($ren_count>0){ $count=0; while($row = $statement3->fetch(PDO::FETCH_ASSOC)){  ?>
            <li><a href="renaissantList.php?lid=<?php echo $row['id']; ?>"><strong><?php echo $row['left_type_name']; ?></strong></a></li>
            <?php } }else{ echo '<li><a><strong>Coming Soon</strong></a></li>'; } } ?>
        </ul>
    </li>
    <li><a class="navHeading"  href="javascript:void(0);">HEMERA</a>
        <ul class="sideBar">
            <?php if(isset($hem_count)){ if($hem_count>0){ $count=0; while($row = $statement4->fetch(PDO::FETCH_ASSOC)){  ?>
            <li><a href="hemeraList.php?lid=<?php echo $row['id']; ?>"><strong><?php echo $row['left_type_name']; ?></strong></a></li>
            <?php } }else{ echo '<li><a><strong>Coming Soon</strong></a></li>'; } } ?>
        </ul>
    </li>
</ul>
