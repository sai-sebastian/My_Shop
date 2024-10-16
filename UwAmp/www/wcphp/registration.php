<?php
session_start();
$title = "Registration";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" href="css/style.css">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mr-auto">
                <h3 class="mb-3">Let's work together</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sequi, ipsa hic alias officia
                    facilis
                    eveniet, neque laborum cumque maxime soluta. Neque atque necessitatibus ipsam sequi soluta magni,
                    iste vero
                    fuga
                    inventore, explicabo totam quis quia nemo possimus cupiditate doloribus?</p>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h3>Registration</h3>

                    <form method="POST" action="handle_registration.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control " id="name" name="name"
                                placeholder="Enter Your Name..." required>
                            <label for="photo" class="col-form-label">Photo</label>
                            <input type="file" class="form-control " id="photo" name="photo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control " id="email" name="email"
                                placeholder="Enter Your Email..." required>

                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control " id="password" name="password"
                                placeholder="Votre mot de passe..." required>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-block btn-primary rounded-0 py-2 px-4"
                                    type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>