<?php 
require_once ('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
</head>
<body>
<?php 
    if (!$_SESSION["uname"]) {
        header('Location: login.php');
    } else {
        echo    "<h2>Welcome " . $_SESSION["uname"] . "</h2>"; 
    }
    
?>

    <a href="logout.php"><input type="button" value="Logout"></a>
    
</body>
</html>