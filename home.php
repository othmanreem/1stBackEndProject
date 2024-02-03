<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="login.php">Skapa inlägg</a></h1>
</body>
</html>

<?php
include_once "db.php";
echo "Alla inlägg";
echo "<hr>";
$sqlqry = "SELECT posts.title,posts.Id
FROM posts
ORDER BY posts.date DESC";
$qryrslts = mysqli_query($con, $sqlqry);
$allrows = [];
while ($row = mysqli_fetch_assoc($qryrslts)){
    print_r($row);
    $allrows[] = $row;
    
}
echo"<hr>";
    print_r($allrows[3]);
foreach ( $allrows as $rowdata ){
    $id = $rowdata['Id'];
  echo "<div>"."<a href=posts.php?id=$id>".$rowdata['title']. "</a>"."</div>"."<br>";
echo "<hr>";

}

?>