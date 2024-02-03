<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <form action="main.php" method="POST" > 
        <?php if(isset($_GET['errormssg'])){
            echo "<div>". $_GET['errormssg']. "</div>";
        }
        ?>
        <label>Name</label>
        <input type="text" name="uname">
        <label>Password</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>

</head> 
<body>
    
</body>
</html>