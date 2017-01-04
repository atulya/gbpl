<?php include 'connection.php'; ?>
<?php
//Insert In LEFT
if (isset($_POST['insertLeft'])) {
    $statement = $conn->prepare("INSERT INTO tbl_left(`root_id`,`left_type_name`) VALUES(:root_id,:left_name)");
    $statement->execute(array(':root_id' => $_POST['root_id'], ':left_name' => $_POST['left_name']));
    header("Location:viewLeft.php?type=1");
}
//Insert In Sub Type
if (isset($_POST['insertSub'])) {
    $statement = $conn->prepare("INSERT INTO tbl_subtype(`left_id`,`subtype_name`) VALUES(:left_id,:sub_name)");
    $statement->execute(array(':left_id' => $_POST['left_id'], ':sub_name' => $_POST['sub_name']));
    header("Location:viewSubType.php?type=1");
}
//Fetch Left Bar Types
if (isset($_POST['root'])) {
    $statement = $conn->prepare("SELECT l.id,l.left_type_name FROM tbl_left AS l 
INNER JOIN tbl_root AS r ON r.id = l.root_id
WHERE r.id = :root_id");
    $statement->execute(array(':root_id' => $_POST['root']));
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    //echo implode(',', $row);
    if(!empty($row)){
        foreach ($row as $k => $v) {
            $new[$k] = $v['id'];
            $new["name".$k] = $v['left_type_name'];
        }
        echo implode(',', $new);
    }else{
        echo "";
    }
}

//Fetch Sub Bar Types
if (isset($_POST['left'])) {
    $statement = $conn->prepare("SELECT id,subtype_name FROM tbl_subtype WHERE left_id = :left_id");
    $statement->execute(array(':left_id' => $_POST['left']));
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    //echo implode(',', $row);
    if(!empty($row)){
        foreach ($row as $k => $v) {
            $new[$k] = $v['id'];
            $new["name".$k] = $v['subtype_name'];
        }
        echo implode(',', $new);
    }else{
        echo "";
    }
    
}

//Insert Medicine for ALl
if(isset($_POST['insertPromethus'])){
	$category = 0;
	if(isset($_POST['category'])){
		$category = $_POST['category'];
	}
    $statement = $conn->prepare("INSERT INTO tbl_data(`sub_id`,`title`,`does_potency`,`does_type`,`title_id`) VALUES(:sub_id,:title,:does_potency,:does_type,:title_id)");
    $statement->execute(array(':sub_id' => $_POST['sub_id'], ':title' => $_POST['title'], ':does_potency' => $_POST['does_potency'],':does_type' => $_POST['does_type'],':title_id'=>$category));
    $type = $_POST['rid'];
    if($type == 1){
        header("Location:viewPromethus.php?type=1");
    }else if($type == 2){
        header("Location:viewRenaissant.php?type=1");
    }else if($type == 3){
        header("Location:viewHemera.php?type=1");
    }else if($type == 4){
        header("Location:viewZooker.php?type=1");
    }
    
    
}
?>