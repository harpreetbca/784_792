<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">
  <title>FURNITURE - Almirah Products</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <?php include('header.php'); ?>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah2.jpeg" class="card-img-top" alt="...">
          <p class="topic">Classic Wooden Almirah</p>
          <p class="price">₹25,000</p>
          <a href="cart.php?action=add&id=6" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah.jpeg" class="card-img-top" alt="...">
          <p class="topic">Royal Steel Wardrobe</p>
          <p class="price">₹18,000</p>
          <a href="cart.php?action=add&id=7" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah3.jpeg" class="card-img-top" alt="...">
          <p class="topic">Vintage Teak Almirah</p>
          <p class="price">₹30,000</p>
          <a href="cart.php?action=add&id=8" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah4.jpeg" class="card-img-top" alt="...">
          <p class="topic">Modern Steel Closet</p>
          <p class="price">₹22,000</p>
          <a href="cart.php?action=add&id=9" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah5.jpeg" class="card-img-top" alt="...">
          <p class="topic">Sheesham Wood Almirah</p>
          <p class="price">₹35,000</p>
          <a href="cart.php?action=add&id=10" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah6.jpeg" class="card-img-top" alt="...">
          <p class="topic">Elegant Steel Almirah</p>
          <p class="price">₹15,550</p>
          <a href="cart.php?action=add&id=11" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah7.jpeg" class="card-img-top" alt="...">
          <p class="topic">Antique Wooden Wardrobe</p>
          <p class="price">₹23,979</p>
          <a href="cart.php?action=add&id=12" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah8.jpeg" class="card-img-top" alt="...">
          <p class="topic">Sturdy Steel Almirah</p>
          <p class="price">₹17,290</p>
          <a href="cart.php?action=add&id=13" class="btn btn-dark">Add to Cart</a>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>
