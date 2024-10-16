<div class="mx-auto" style="width: 800px;">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <?php
      require_once("conn.php");
      $req = "SELECT * FROM product ORDER  BY price LIMIT 3";
      $ps = $pdo->prepare($req);
      $ps->execute();
      $active = true;
      while ($row = $ps->fetch()) {
        $imagePath = "images/" . $row['photo'];
        ?>
        
        <div class="carousel-item <?= $active ? 'active' : '' ?>">
                <img src="<?= $imagePath ?>" class="card-img-top" alt="Product Image">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['name'] ?></h5>
                    <p><?= $row['description'] ?></p>
                </div>
            </div>
        <!-- <div class="carousel-item">
          <img src="images/leo1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/photo.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div> -->
        <?php
        $active = false;
      }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>