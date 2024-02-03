<?php
session_start();
include_once "db.php";
$uname = $_POST['uname'];
$pass = $_POST['password'];
if(empty($uname)){
    header ("Location: login.php?errormssg=ange användarnamn");
    exit();
}
if(empty($pass)){
    header ("Location: login.php?errormssg=ange lösenord");
    exit();
}
$sqlqry = "SELECT * FROM users WHERE user_name = '$uname' AND password='$pass'"; 

$rslts = mysqli_query($con, $sqlqry);
echo mysqli_num_rows($rslts);
if (mysqli_num_rows($rslts) == TRUE){

    $row = mysqli_fetch_assoc($rslts);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['id'] = $row['id'];
        header ("Location: create.php");
      exit();

}
else {
    header("Location: login.php?errormssg=fel användarnamn eller lösenord");
    exit(); 
}
?>
