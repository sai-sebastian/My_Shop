<?php
    session_start();
    $titre = "Une autre page...";
    include 'header.php';
    include 'menu.php';
?>
<div class="container">
    <h1>hI <?=$_SESSION['PROFILE']['name']?></h1>
    <p>Bla bla bla...</p>
</div>
<?php
    include 'footer.php';
?>