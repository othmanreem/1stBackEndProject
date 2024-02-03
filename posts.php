<?php
include_once "db.php";

$id = $_GET['id'];
$sqlqry = "SELECT posts.title, posts.post, users.user_name, posts.date
FROM posts 
INNER JOIN users ON posts.user_Id = users.id
WHERE posts.Id =  $id";
$qryrslts = mysqli_query($con, $sqlqry);
$allrows = [];
while ($row = mysqli_fetch_assoc($qryrslts)){
    $allrows[] = $row;
}
foreach ( $allrows as $rowdata ){
 $heading = $rowdata['title'];
 $name = $rowdata['user_name'];
 $post = $rowdata['post'];
 $date = $rowdata['date'];
 echo "<h2> Skribent: ".$name."</h2>"."<br>";
 echo "<hr>";  
 echo "<p> Rubrik: ".$heading."</p>"."<br>";
 echo "<p> Inlägg: ".$post."</p>"."<br>";
 echo "<p> Publiceringsdatum: ".$date."</p>"."<br>";
 echo "<div>"."<a href=home.php?> < Hem </a>"."</div>"."<br>";
 
  
  
}

?>