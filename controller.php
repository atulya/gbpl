<?php include 'connection.php'; ?>
<?php
	if(isset($_POST['product_id'])){
		$statement_first = $conn->prepare("SELECT s.id,s.subtype_name FROM `tbl_root` AS r
INNER JOIN tbl_left AS l ON l.root_id = r.id
INNER JOIN tbl_subtype AS s ON s.left_id = l.id
WHERE r.id = :product_id");
		$statement_first->execute(array(':product_id'=>$_POST['product_id']));
		$row = $statement_first->fetchALL(PDO::FETCH_ASSOC);
		$i = 0;
		foreach($row as $x){
			$res[$i] = $x['id'].'.'.$x['subtype_name'];
			++$i;
		}
		echo implode(',',$res);
	}
?>