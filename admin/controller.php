<?php include 'connection.php'; ?>
<?php
    //ini_set("display_errors", 1);
    //Login Function
    if(isset($_POST['login'])){
        $admin_uname = $_POST['username'];
        $password = md5($_POST['password']);
        $statement = $conn->prepare("SELECT * FROM tbl_admin WHERE username = :username AND password = :password");
        $statement->execute(array(':username'=>$admin_uname,':password'=>$password));
        $row = $statement->fetch();
        if(!empty($row)){
            //Valid User
            $_SESSION['id'] = $row['id'];
            header('Location:dashboard.php');
        }else{
            //Invalid User
            header('Location:index.php?msg=error');
        }
    }
    if(isset($_GET['subject'])){
        $_SESSION['id']="";
        header('Location:index.php');
    }
?>