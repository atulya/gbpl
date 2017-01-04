<?php include 'connection.php'; ?>
<?php
	
	if(isset($_GET['type'])){
		//Delete From TBL_LEFT,TBL_SUBTYPE,TBL_DATA
		if($_GET['type'] == "left"){
			$statement = $conn->prepare("UPDATE tbl_left AS l
LEFT JOIN tbl_subtype AS s ON s.left_id = l.id
LEFT JOIN tbl_data AS d ON d.sub_id = s.id
SET l.status = 1, s.status = 1, d.status = 1
WHERE l.id = :id");
			$statement->execute(array(':id'=>$_GET['id']));
			header("Location:viewLeft.php?res=delete");
		}
		
		//Delete From TBL_SUBTYPE,TBL_DATA
		if($_GET['type'] == "sub"){
			$statement = $conn->prepare("UPDATE tbl_subtype AS s
LEFT JOIN tbl_data AS d ON d.sub_id = s.id
SET s.status = 1, d.status = 1
WHERE s.id = :id");
			$statement->execute(array(':id'=>$_GET['id']));
			header("Location:viewSubType.php?res=delete");
		}
		
		//Delete From TBL_DATA
		if($_GET['type'] == "data"){
			$statement = $conn->prepare("UPDATE tbl_data SET status = 1 WHERE id = :id");
			$statement->execute(array(':id'=>$_GET['id']));
			$page_type = $_GET['page'];
			if($page_type == 1){
				header("Location:viewHemera.php?res=delete");
			}elseif($page_type == 2){
				header("Location:viewPromethus.php?res=delete");
			}elseif($page_type == 3){
				header("Location:viewRenaissant.php?res=delete");
			}elseif($page_type == 4){
				header("Location:viewZooker.php?res=delete");
			}
		}
		
	}
?>