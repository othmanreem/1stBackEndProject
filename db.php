<?php
$srvrname = "localhost";
$nname = "root";
$pasword = "root";

 $dbname = "usersdb";

 $con = mysqli_connect($srvrname,$nname, $pasword, $dbname);

 if(!$con){
    echo "något gick fel";
 }
?>