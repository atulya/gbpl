<?php include 'connection.php'; ?>
<?php
//Update In LEFT
if (isset($_POST['insertLeft'])) {
	$statement = $conn->prepare("UPDATE tbl_left SET left_type_name = :left_name WHERE id = :id");
    $statement->execute(array(':left_name' => $_POST['left_name'], ':id' => $_POST['lid']));
    header("Location:viewLeft.php?update=1");
}
//Update In Sub Type
if (isset($_POST['insertSub'])) {
	$statement = $conn->prepare("UPDATE tbl_subtype SET subtype_name = :sub_name WHERE id = :id");
    $statement->execute(array(':sub_name' => $_POST['sub_name'], ':id' => $_POST['sid']));
    header("Location:viewSubType.php?update=1");
}

//Update Medicine for ALl
if(isset($_POST['insertPromethus'])){
    $statement = $conn->prepare("UPDATE tbl_data SET title=:title,does_potency=:does_potency,does_type=:does_type WHERE id=:id");
    $statement->execute(array(':title' => $_POST['title'], ':does_potency' => $_POST['does_potency'],':does_type' => $_POST['does_type'],':id'=>$_POST['did']));
    $type = $_POST['rid'];
    if($type == 1){
        header("Location:viewPromethus.php?update=1");
    }else if($type == 2){
        header("Location:viewRenaissant.php?update=1");
    }else if($type == 3){
        header("Location:viewHemera.php?update=1");
    }else if($type == 4){
        header("Location:viewZooker.php?update=1");
    }
    
    
}
?>