<?php
require_once "../../db/connectToDatabase.php";

$sql = "SELECT * FROM admin_tbl";
$result = mysqli_query($conn, $sql);

$admins = [];
if ($result && mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $admins[] = $row;
  }
}

echo json_encode($admins);
