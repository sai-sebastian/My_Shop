<?php
session_start();
require_once("admin_check.php");
$title = "Add Admin";
include 'header.php';
include 'menu.php';
require_once("conn.php");
?>
<div class="content">
    <div class="col-md-12">
        <div class="box">
            <h3>Add Admin</h3>
            <form method="POST" action="handle_add_admin.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" class="form-control " id="name" name="name" placeholder="Enter Your Name..."
                        required>
                    <label for="photo" class="col-form-label">Photo</label>
                    <input type="file" class="form-control " id="photo" name="photo" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control " id="email" name="email" placeholder="Enter Your Email..."
                        required>

                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" class="form-control " id="password" name="password"
                        placeholder="Votre mot de passe..." required>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-block btn-primary rounded-0 py-2 px-4" type="submit">Add Admin</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>