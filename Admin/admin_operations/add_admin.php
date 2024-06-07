<?php
// require_once "../../Pinpark/db/connectToDatabase.php";
require_once "../../db/connectToDatabase.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $sql = "INSERT INTO admin_tbl (firstname, lastname, username, password, email) VALUES ('$firstname', '$lastname', '$username', '$password', '$email')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: ../admin.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
