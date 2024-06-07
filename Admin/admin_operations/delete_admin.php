<?php
require_once "../../db/connectToDatabase.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
  $id = $_GET["id"];

  // Use prepared statement to delete admin
  $sql = "DELETE FROM admin_tbl WHERE uid=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);

  if (mysqli_stmt_affected_rows($stmt) > 0) {
    header("Location: ../admin.php");
    exit;
  } else {
    echo "Error: Admin not found or already deleted.";
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  echo "Invalid request";
  exit;
}
?>
