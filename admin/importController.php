<?php include 'connection.php'; ?>
<?php

//open uploaded csv file with read only mode
$csvFile = fopen($_FILES['csv']['tmp_name'], 'r');
//parse data from csv file line by line
$count = 0;
$table_name = 'backup_'.date('YmdHis');
$database = $conn->prepare("CREATE TABLE ".$table_name." SELECT * FROM tbl_data");
$database->execute(array());
while (($line = fgetcsv($csvFile)) !== FALSE) {
    $statement = $conn->prepare("INSERT INTO tbl_data(`sub_id`,`title`,`does_potency`,`does_type`,`title_id`) VALUES(:sub_id,:title,:does_potency,:does_type,:title_id)");
    $res = $statement->execute(array(':sub_id' => $line[0], ':title' => $line[1],':does_potency' => $line[2],':does_type' => $line[3],':title_id' => $line[4]));
    //$db->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('" . $line[0] . "','" . $line[1] . "','" . $line[2] . "','" . $line[3] . "','" . $line[3] . "','" . $line[4] . "')");
    $count += $res;
}
//close opened csv file
fclose($csvFile);
header('Location:importCSV.php?count='.$count);
?>