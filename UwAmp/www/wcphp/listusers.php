<?php
session_start();
require_once("admin_check.php");
$title = "Users List";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  /* Add margin-left to h4 */
  h4 {
    margin-left: 10px;
  }

  /* table {
      margin-left: 10px; 
      margin-right: 20px !important;
    } */
</style>
<div class="content">
  <h4> Users List</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Photo</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
      <?php
      // Connection :
      require_once("conn.php");
      $req = "SELECT * FROM users";
      $ps = $pdo->prepare($req);
      $ps->execute();
      while ($row = $ps->fetch()) {
        if ($_SESSION['PROFILE']['id'] != $row['id']) {
          ?>
          <tr class="vertical-align-middle">
            <th scope="row">
              <?= $row['id'] ?>
            </th>
            <td>
              <?= $row['name'] ?>
            </td>
            <td>
              <?= $row['email'] ?>
            </td>
            <td>
              <?= $row['role'] ?>
            </td>
            <td><img src="images/<?= $row['photo'] ?>" width="100px" height="100px"></td>

            <td><a href="delete.php?id=<?= $row['id'] ?>">Delete</a> <a href="edit.php?id=<?= $row['id'] ?>">Edit</a></td>

          </tr>

          <?php
        }
      }
      ?>

    </tbody>

  </table>

  <style>
    .vertical-align-middle td,
    .vertical-align-middle th {
      vertical-align: middle;
    }
  </style>

</div>
<?php
include 'footer.php';
?>