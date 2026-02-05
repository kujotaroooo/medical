<?php
session_start();
if (!isset($_SESSION['user']) ) {
      header("Location: 404.php");
    
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h2>
<form method="post" action="../controller/logout.php">
    <input type="submit" name="logout" value="Logout">
</form>


</body>
</html>

