<?php
session_start();
include_once "db.php";
if (!isset($_SESSION['user_name'])){
    header("Location: login.php?errormssg=logga in först");
}

if(isset($_GET['heading']) && isset($_GET['maintxt'])) {
    $heading = $_GET['heading'];
    $maintxt = $_GET['maintxt'];
    if (empty($heading) || empty($maintxt)){
        echo "Fyll i rubrik och text";
    }
   else{
    $uId = $_SESSION['id'];
    $insrtSqlQry = "INSERT INTO posts (user_Id, title, post, date)
                    VALUES (?, ?, ?, NOW())";
    $prpStm = mysqli_prepare($con, $insrtSqlQry);
    mysqli_stmt_bind_param($prpStm, "iss", $uId, $heading, $maintxt);
    mysqli_stmt_execute($prpStm);
    
}
}

?>


<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Skapa inlägg</title>
    </head>
    <body>
    <h1>  Hej <?php echo $_SESSION['user_name']; ?> </h1>
        <h1> Skriv ett inlägg</h1>
        <form method="GET" action="create.php">
        <input type="text" name ="heading" placeholder="Rubrik" >
        <input type="text" name="maintxt"  placeholder="Text" >
        <input type="submit" value="send">
        <p><a href="logout.php">< Hem</a></p>

       

        </form>


    </body>
    </html>
</html>