<?php 
  session_start();
  if (!isset($_SESSION["username"])) {
    header("location: ../../../../../../Pinpark/public/view/login_page.php");
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
    <center>
    <h1>W . E . L . C . O . M . E</h1>
    <h2>Worker/Employee's Page</h2>
    <br>
    <br>
    <?php echo $_SESSION["username"]; ?>
    <br>
    <br>
    <a href="/../Pinpark/public/view/logout_page.php">Logout</a>
  </center>
</body>
</html>