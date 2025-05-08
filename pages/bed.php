<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">
  <title>FURNITURE - Bed Products</title>
</head>

<body>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <?php include('header.php'); ?>

  <div class="row">
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed1.jpeg" class="card-img-top" alt="...">
          <p class="topic">Elegant Wooden Bed Set</p>
          <p class="price">₹35,000</p>
          <a href="cart.php?action=add&id=1" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed2.jpeg" class="card-img-top" alt="...">
          <p class="topic">Modern Steel Frame Bed Set</p>
          <p class="price">₹20,000</p>
          <a href="cart.php?action=add&id=2" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed3.jpeg" class="card-img-top" alt="...">
          <p class="topic">Royal Teak Wood Bed Set</p>
          <p class="price">₹45,000</p>
          <a href="cart.php?action=add&id=3" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed4.jpeg" class="card-img-top" alt="...">
          <p class="topic">Classic Steel Bed Set</p>
          <p class="price">₹22,000</p>
          <a href="cart.php?action=add&id=4" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed5.jpeg" class="card-img-top" alt="...">
          <p class="topic">Vintage Wood Bed Set</p>
          <p class="price">₹22,000</p>
          <a href="cart.php?action=add&id=5" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>
