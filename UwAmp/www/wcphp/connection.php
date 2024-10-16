<?php
session_start();
$title = "Connection";
include 'header.php';
include 'menu.php';
?>
<link rel="stylesheet" href="css/style.css">
<div class="content">
  <div class="container">
    <?php
    if (isset($_SESSION['message'])) {
      ?>
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php
      unset($_SESSION['message']);
    }
    ?>
    <div class="row">
      <div class="col-md-5 mr-auto">
        <h3 class="mb-3">Let's work together</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae sequi, ipsa hic alias officia facilis
          eveniet, neque laborum cumque maxime soluta. Neque atque necessitatibus ipsam sequi soluta magni, iste vero
          fuga
          inventore, explicabo totam quis quia nemo possimus cupiditate doloribus?</p>
      </div>
      <div class="col-md-6">
        <div class="box">
          <h3>Connection</h3>
          <form method="POST" action="handle_connection.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="col-form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="col-form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-primary rounded-0 py-2 px-4">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- <p>To be done...
  <br>
  1. Get the email and the password from a <i>Form</i> (you can take it from: <a target="_blank" href="https://getbootstrap.com/docs/5.3/forms/overview/">Exemple of a Form getBootstrap website  </a>).
  <br>
  2. Fill the attributs <i>method ( POST, GET ????)</i>, <i>action (name of the script)</i> and <i>enctype</i>(see <a target="_blank" href="https://www.w3schools.com/tags/att_form_enctype.asp">enctype values)</a> 
  <br>
  3. prepare an sql request with the email and the <i>hashed</i> password.
  <br>
  4. If a  <i>row</i> result exist then sent the <i>row</i> result through <i>$_SESSION</i> array to another page named "UserPage.php".
  <br>
  5. The  "UserPage.php" contains a message "Hi"+the name of the user and in the navbar hide the "connection" and the "registrartion" option and display only "logout" option.
  <br>
  6. If the user does not belong the registred users or the password is wrong then send the message "wrong Login or password " and rediredt to the index.php or connection.php page. 

</p> -->
  </div>
</div>
<?php
include 'footer.php';
?>