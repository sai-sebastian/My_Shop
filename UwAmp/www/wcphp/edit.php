<?php
session_start();
require_once("admin_check.php");
$title = "Edit";
include 'header.php';
include 'menu.php';
$id = htmlentities($_GET['id']);
require_once("conn.php");
$req = "SELECT * FROM users WHERE id=?";
$ps = $pdo->prepare($req);
$params = array($id);
$ps->execute($params);
$user = $ps->fetch();
?>
<div class="content">
    <div class="box">
        <div class="container">
            <h3>Edit a user</h3>
            <form method="POST" action="update.php" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="id" class="col-form-label">Id</label>
                            <input type="text" class="form-control " id="id" name="id" value="<?= $user['id'] ?>"
                                readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control " readonly id="name" name="name" value="<?= $user['name'] ?>"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label for="photo" class="col-form-label">Photo</label>
                            <input type="file" class="form-control " readonly id="photo" name="photo" value="<?= $user['photo'] ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control " id="email" name="email" value="<?= $user['email'] ?>"
                                placeholder="Enter Your Email..." readonly required>
                        </div>
                        <div class="col-md-4">
                            <label for="role" class="col-form-label">Role</label>
                            <select class="form-select me-3" name="role" id="role" style="width: 100%;">
                                <option value="0" <?= ($user['role'] == '0') ? 'selected' : '' ?>>0</option>
                                <option value="1" <?= ($user['role'] == '1') ? 'selected' : '' ?>>1</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control " id="password" name="password" readonly
                                placeholder="Votre mot de passe..."  required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary"
                                type="submit">Modify</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>