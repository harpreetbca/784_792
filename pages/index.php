<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">
  <title>FURNITURE</title>
</head>

<body>
  <!-- javascript file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>



  <?php
  include('header.php');
  
  ?>






  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="../imageS/about4.jpeg" class="d-sm w-100 mb-auto " style="height: 600px;" alt="pic">

      </div>
      <div class="carousel-item ">
        <img src="../images/download3.jpeg" class="d-sm w-100 " style="height: 600px;" alt="pic">

      </div>
      <div class="carousel-item height=">
        <img src="../images/download4.jpeg" class="d-sm w-100 " style="height: 600px;" alt="pic">

      </div>

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


  <!-- carousel end -->

  <p class="arrival">𝒩𝑒𝓌 𝒜𝓇𝓇𝒾𝓋𝒶𝓁</p>
  <div class="row">
    <div class="col-sm-4 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah6.jpeg" class="card-img-top" alt="...">
          <p class="topic">Elegant Steel Almirah</p>
          <p class="price">₹15,550</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed2.jpeg" class="card-img-top" alt="...">
          <p class="topic">Modern Steel Frame Bed Set</p>
          <p class="price">₹20,000</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa8.jpeg" class="card-img-top" alt="...">
          <p class="topic">Luxe Leather Sofa Set </p>
          <p class="price">₹50,000</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa6.jpeg" class="card-img-top" alt="...">
          <p class="topic">Classic Fabric Sofa Set </p>
          <p class="price">₹28,000</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah5.jpeg" class="card-img-top" alt="...">
          <p class="topic">Sheesham Wood Almirah </p>
          <p class="price">₹35,000</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa1.jpeg" class="card-img-top" alt="...">
          <p class="topic">Contemporary Corner Sofa Set</p>
          <p class="price">₹40,000</p>
          <a href="./purchase.php" class="btn btn-dark ">Purchase</a>
        </div>
      </div>
    </div>

  </div>

  <div class="button mx-auto">
    <a href="./product.php" class="btn btn-dark ">View All</a>
  </div>

  <script src="../js/other.js"></script>
  <video class="video" loop muted>
    <source src="../videos/857150-hd_1920_746_30fps (1).mp4" type="video/mp4" />
  </video>

  <?php
  include('footer.php');
  
  ?>




</body>

</html>