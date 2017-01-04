<?php
include 'connection.php';
include_once('PHPMailer/class.phpmailer.php');
//FOr Letter Head
if(isset($_POST['letter_head'])){
    if(isset($_POST['check1'])){
        $promethus = "Yes";
		$promethus_id = 1;
    }else{
        $promethus = "No";
		$promethus_id = 0;
    }
    if(isset($_POST['check2'])){
        $renaissant = "Yes";
		$renaissant_id = 1;
    }
    else{
        $renaissant = "No";
		$renaissant_id = 0;
    }
    if(isset($_POST['check3'])){
        $hemera = "Yes";
		$hemera_id = 1;
    }
    else{
        $hemera = "No";
		$hemera_id = 0;
    }
    if(isset($_POST['check4'])){
        $zooker = "Yes";
		$zooker_id = 1;
    }
    else{
        $zooker = "No";
		$zooker_id = 0;
    }
	$statement = $conn->prepare("INSERT INTO tbl_letter(`email`,`promethus`,`renaissant`,`hemera`,`zooker`) VALUES(:email,:promethus,:renaissant,:hemera,:zooker)");
    $statement->execute(array(':email' => $_POST['email_add'],':promethus' => $promethus_id,':renaissant' => $renaissant_id,':hemera' => $hemera_id,':zooker' => $zooker_id));
    $Mail = new PHPMailer();
    $Mail->IsSMTP(); // Use SMTP
    $Mail->Host = "smtp.gbennettilife.com"; // Sets SMTP server
    $Mail->SMTPDebug = 2; // 2 to enable SMTP debug information
    $Mail->SMTPAuth = TRUE; // enable SMTP authentication
    $Mail->SMTPSecure = "ssl"; //Secure conection
    $Mail->Port = 465; // set the SMTP port
    $Mail->Username = 'info@gbennettilife.com'; // SMTP account username
    $Mail->Password = '@#e;a7P=_tQc'; // SMTP account password
    $mail = new PHPMailer;

//From email address and name
    $mail->From = "info@gbennettilife.com";
    $mail->FromName = "Admin";

//To address and name
    $mail->addAddress("info@gbennettilife.com", "Admin");
    $mail->isHTML(true);
    $body="<html>";
    $body .= "<body>";
    $body .= "<table border=1>";
    $body .= "<tr>";
    $body .= "<td>Email";
    $body .= "</td>";
    $body .= "<td>".$_POST['email_add'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Promethus";
    $body .= "</td>";
    $body .= "<td>".$promethus;
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Renaissant";
    $body .= "</td>";
    $body .= "<td>".$renaissant;
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Hemera";
    $body .= "</td>";
    $body .= "<td>".$hemera;
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Zooker";
    $body .= "</td>";
    $body .= "<td>".$zooker;
    $body .= "</td>";
    $body .= "</tr>";    
    $body .= "</table>";
    $body .= "</body>";
    $body .="</html>";
    $mail->Subject = "New Letter Head Entry";
    $mail->Body = $body;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location:index.php");
    }
}
//Enquiry Submission
if (isset($_POST['submit'])) {
	$statement = $conn->prepare("INSERT INTO tbl_enquiry(`department`,`subject`,`title`,`full_name`,`email`,`phone`,`cell_no`,`address`,`country`,`city`,`state`,`company_name`,`comment`) 
	VALUES(:department,:subject,:title,:full_name,:email,:phone,:cell_no,:address,:country,:city,:state,:company_name,:comment)");
    $statement->execute(array(':department'=>$_POST['department'],':subject'=>$_POST['subject'],':title'=>$_POST['title'],':full_name'=>$_POST['name'],':email'=>$_POST['email'],':phone'=>$_POST['phone'],':cell_no'=>$_POST['cellno'],':address'=>$_POST['address'],':country'=>$_POST['country'],':city'=>$_POST['city'],':state'=>$_POST['state'],':company_name'=>$_POST['company_name'],':comment'=>$_POST['enquiry_comments']));
    $Mail = new PHPMailer();
    $Mail->IsSMTP(); // Use SMTP
    $Mail->Host = "smtp.gbennettilife.com"; // Sets SMTP server
    $Mail->SMTPDebug = 2; // 2 to enable SMTP debug information
    $Mail->SMTPAuth = TRUE; // enable SMTP authentication
    $Mail->SMTPSecure = "ssl"; //Secure conection
    $Mail->Port = 465; // set the SMTP port
    $Mail->Username = 'info@gbennettilife.com'; // SMTP account username
    $Mail->Password = '@#e;a7P=_tQc'; // SMTP account password
    $mail = new PHPMailer;

//From email address and name
    $mail->From = "info@gbennettilife.com";
    $mail->FromName = "Admin";

//To address and name
    $mail->addAddress("info@gbennettilife.com", "Admin");
    $mail->isHTML(true);
    $body="<html>";
    $body .= "<body>";
    $body .= "<table border=1>";
    $body .= "<tr>";
    $body .= "<td>Department";
    $body .= "</td>";
    $body .= "<td>".$_POST['department'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Subject";
    $body .= "</td>";
    $body .= "<td>".$_POST['subject'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Full Name";
    $body .= "</td>";
    $body .= "<td>".$_POST['title']." ".$_POST['name'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Email";
    $body .= "</td>";
    $body .= "<td>".$_POST['email'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Phone";
    $body .= "</td>";
    $body .= "<td>".$_POST['phone'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Cell No";
    $body .= "</td>";
    $body .= "<td>".$_POST['cellno'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Address";
    $body .= "</td>";
    $body .= "<td>".$_POST['address'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Country";
    $body .= "</td>";
    $body .= "<td>".$_POST['country'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>City";
    $body .= "</td>";
    $body .= "<td>".$_POST['city'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>State";
    $body .= "</td>";
    $body .= "<td>".$_POST['state'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Company Name";
    $body .= "</td>";
    $body .= "<td>".$_POST['company_name'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td>Enquiry Comments";
    $body .= "</td>";
    $body .= "<td>".$_POST['enquiry_comments'];
    $body .= "</td>";
    $body .= "</tr>";
    $body .= "</table>";
    $body .= "</body>";
    $body .="</html>";
    $mail->Subject = "New Enquiry";
    $mail->Body = $body;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location:businessEnquiry.php?status=1");
    }
}
?>