<?php
require_once "../../../Pinpark/db/connectToDatabase.php";
$title = "Administrator";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
  $id = $_GET["id"];

  $sql = "SELECT * FROM admin_tbl WHERE uid = '$id'";
  $result = mysqli_query($conn, $sql);

  if ($result && mysqli_num_rows($result) > 0) {
    $admin = mysqli_fetch_assoc($result);
  } else {
    echo "Admin not found";
    exit;
  }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
  $id = $_POST["id"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  $sql = "UPDATE admin_tbl SET firstname='$firstname', lastname='$lastname', username='$username', password='$password', email='$email' WHERE uid='$id'";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: ../admin.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
} else {
  echo "Invalid request";
  exit;
}
?>
<!-- HTML form for editing admin details -->
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAdminModalLabel">Edit Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./edit_admin.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $admin['uid']; ?>">
          <label for="firstname">First Name:</label><br>
          <input type="text" id="firstname" name="firstname" value="<?php echo $admin['firstname']; ?>"><br>
          <label for="lastname">Last Name:</label><br>
          <input type="text" id="lastname" name="lastname" value="<?php echo $admin['lastname']; ?>"><br>
          <label for="username">Username:</label><br>
          <input type="text" id="username" name="username" value="<?php echo $admin['username']; ?>"><br>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" value="<?php echo $admin['password']; ?>"><br>
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" value="<?php echo $admin['email']; ?>"><br><br>
          <button type="submit" class="btn btn-primary" style="background-color: gold; font-weight: 600;">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
