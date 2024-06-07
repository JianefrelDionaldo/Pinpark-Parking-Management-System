<?php 

// * We're going to connect our php file to Database "db_parkingsys" from PhpMyAdmin.

$dbServername = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "db_parkingsys";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection successful!";


/*  
  *  CONNECTION METHOD #1

try {
  $conn = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Sucess!";
}
catch (PDOException $e) {
  echo "Connection Failed: ". $e->getMessage();
}
*/

/* 
  *  CONNECTION METHOD #2

Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
*/
