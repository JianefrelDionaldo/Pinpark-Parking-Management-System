<?php
$title = "Administrator";
$favicon_url = "../Admin/assets/img/Pinpark_logo.png";
require_once "../Admin/includes/admin_header.php";

session_start();
if (!isset($_SESSION["username"])) {
  header("location: ../../../../Pinpark/public/view/login_page.php");
  exit;
}

require_once "../../Pinpark/db/connectToDatabase.php";

// Fetch admin_tbl data
$sql = "SELECT * FROM admin_tbl";
$result = mysqli_query($conn, $sql);

$admins = [];
if ($result && mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $admins[] = $row;
  }
}
?>

<div class="wrapper">
  <!-- Aside element set as Sidebar -->
  <?php include("../Admin/includes/admin_sidebar.php"); ?>
  <div class="main">
    <!-- Navbar -->
    <?php include("../Admin/includes/admin_navbar.php"); ?>
    <main class="content px-3 py-2">
      <div class="container-fluid">
        <div class="mb-3">
          <h4>Admin Dashboard</h4>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card border-0">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($admins)) : ?>
                        <?php foreach ($admins as $index => $admin) : ?>
                          <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td><?php echo htmlspecialchars($admin['firstname']); ?></td>
                            <td><?php echo htmlspecialchars($admin['lastname']); ?></td>
                            <td><?php echo htmlspecialchars($admin['username']); ?></td>
                            <td><?php echo htmlspecialchars($admin['password']); ?></td>
                            <td><?php echo htmlspecialchars($admin['email']); ?></td>
                            <td>
                              <a href="./admin_operations/edit_admin.php?id=<?php echo $admin['uid']; ?>" class="btn btn-primary btn-sm">Edit</a>
                              <a href="./admin_operations/delete_admin.php?id=<?php echo $admin['uid']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this admin?');">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php else : ?>
                        <tr>
                          <td colspan="7" class="text-center">No data available</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer text-end">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAdminModal">Add New</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <a href="#" class="theme-toggle">
      <i class="fa-regular fa-moon"></i>
      <i class="fa-regular fa-sun"></i>
    </a>
    <?php include("../Admin/includes/admin_pgFooter.php"); ?>
  </div>
</div>

<!-- Add Admin Modal -->
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAdminModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form for adding new admin -->
        <!-- You can add your form elements here -->
        <form action="./admin_operations/add_admin.php" method="POST">
          <label for="firstname">First Name:</label><br>
          <input type="text" id="firstname" name="firstname"><br>
          <label for="lastname">Last Name:</label><br>
          <input type="text" id="lastname" name="lastname"><br>
          <label for="username">Username:</label><br>
          <input type="text" id="username" name="username"><br>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password"><br>
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email"><br><br>
          <button type="submit" class="btn btn-primary" style="background-color: gold; color: black; font-weight: 600;">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php include("../Admin/includes/admin_footer.php"); ?>
