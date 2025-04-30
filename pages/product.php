<<<<<<< HEAD
<?php
include('header.php');
?>
=======
>>>>>>> main
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">

  <title>Almirah Products</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Header Section -->
  <header>
    <!-- Add your header content here -->
  </header>

  <!-- Almirah Products -->
  <div class="row">
    <!-- All products remain unchanged -->
    <!-- Classic Wooden Almirah -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah2.jpeg" class="card-img-top" alt="Classic Wooden Almirah">
          <p class="topic">Classic Wooden Almirah</p>
          <p class="price">₹25,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Classic Wooden Almirah">
          <input type="hidden" name="price" value="25000">
          <input type="hidden" name="image" value="../images/almirah2.jpeg">

          <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Royal Steel Wardrobe -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah.jpeg" class="card-img-top" alt="Royal Steel Wardrobe">
          <p class="topic">Royal Steel Wardrobe</p>
          <p class="price">₹18,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Royal Steel Wardrobe">
<input type="hidden" name="price" value="18000">
<input type="hidden" name="image" value="../images/almirah.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Vintage Teak Almirah -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah3.jpeg" class="card-img-top" alt="Vintage Teak Almirah">
          <p class="topic">Vintage Teak Almirah</p>
          <p class="price">₹30,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Vintage Teak Almirah">
<input type="hidden" name="price" value="30000">
<input type="hidden" name="image" value="../images/almirah3.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Modern Steel Closet -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah4.jpeg" class="card-img-top" alt="Modern Steel Closet">
          <p class="topic">Modern Steel Closet</p>
          <p class="price">₹22,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Modern Steel Closet">
<input type="hidden" name="price" value="22000">
<input type="hidden" name="image" value="../images/almirah4.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Sheesham Wood Almirah -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah5.jpeg" class="card-img-top" alt="Sheesham Wood Almirah">
          <p class="topic">Sheesham Wood Almirah</p>
          <p class="price">₹35,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Sheesham Wood Almirah">
<input type="hidden" name="price" value="35000">
<input type="hidden" name="image" value="../images/almirah5.jpeg">
        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Elegant Steel Almirah -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah6.jpeg" class="card-img-top" alt="Elegant Steel Almirah">
          <p class="topic">Elegant Steel Almirah</p>
          <p class="price">₹15,550</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Elegant Steel Almirah">
<input type="hidden" name="price" value="15550">
<input type="hidden" name="image" value="../images/almirah6.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Antique Wooden Wardrobe -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah7.jpeg" class="card-img-top" alt="Antique Wooden Wardrobe">
          <p class="topic">Antique Wooden Wardrobe</p>
          <p class="price">₹23,979</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Antique Wooden Wardrobe">
<input type="hidden" name="price" value="23979">
<input type="hidden" name="image" value="../images/almirah7.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Sturdy Steel Almirah -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/almirah8.jpeg" class="card-img-top" alt="Sturdy Steel Almirah">
          <p class="topic">Sturdy Steel Almirah</p>
          <p class="price">₹17,290</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Sturdy Steel Almirah">
<input type="hidden" name="price" value="17290">
<input type="hidden" name="image" value="../images/almirah8.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Beds -->
    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed1.jpeg" class="card-img-top" alt="Elegant Wooden Bed Set">
          <p class="topic">Elegant Wooden Bed Set</p>
          <p class="price">₹35,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Elegant Wooden Bed Set">
<input type="hidden" name="price" value="35000">
<input type="hidden" name="image" value="../images/bed1.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed2.jpeg" class="card-img-top" alt="Modern Steel Frame Bed Set">
          <p class="topic">Modern Steel Frame Bed Set</p>
          <p class="price">₹20,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Modern Steel Frame Bed Set">
<input type="hidden" name="price" value="20000">
<input type="hidden" name="image" value="../images/bed2.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed3.jpeg" class="card-img-top" alt="Royal Teak Wood Bed Set">
          <p class="topic">Royal Teak Wood Bed Set</p>
          <p class="price">₹45,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Royal Teak Wood Bed Set">
<input type="hidden" name="price" value="45000">
<input type="hidden" name="image" value="../images/bed3.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/bed4.jpeg" class="card-img-top" alt="Classic Steel Bed Set">
          <p class="topic">Classic Steel Bed Set</p>
          <p class="price">₹22,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Classic Steel Bed Set">
<input type="hidden" name="price" value="22000">
<input type="hidden" name="image" value="../images/bed4.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <!-- Sofas -->
    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa1.jpeg" class="card-img-top" alt="Contemporary Corner Sofa Set">
          <p class="topic">Contemporary Corner Sofa Set</p>
          <p class="price">₹40,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Contemporary Corner Sofa Set">
<input type="hidden" name="price" value="40000">
<input type="hidden" name="image" value="../images/sofa1.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa2.jpeg" class="card-img-top" alt="Vintage Wooden Sofa Set">
          <p class="topic">Vintage Wooden Sofa Set</p>
          <p class="price">₹40,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Vintage Wooden Sofa Set">
<input type="hidden" name="price" value="40000">
<input type="hidden" name="image" value="../images/sofa2.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa3.jpeg" class="card-img-top" alt="Minimalist Modular Sofa Set">
          <p class="topic">Minimalist Modular Sofa Set</p>
          <p class="price">₹24,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Minimalist Modular Sofa Set">
<input type="hidden" name="price" value="24000">
<input type="hidden" name="image" value="../images/sofa3.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa4.jpeg" class="card-img-top" alt="Royal Velvet Sofa Set">
          <p class="topic">Royal Velvet Sofa Set</p>
          <p class="price">₹65,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Royal Velvet Sofa Set">
<input type="hidden" name="price" value="65000">
<input type="hidden" name="image" value="../images/sofa4.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa5.jpeg" class="card-img-top" alt="Elegant Steel Frame Sofa Set">
          <p class="topic">Elegant Steel Frame Sofa Set</p>
          <p class="price">₹32,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Elegant Steel Frame Sofa Set">
<input type="hidden" name="price" value="32000">
<input type="hidden" name="image" value="../images/sofa5.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa6.jpeg" class="card-img-top" alt="Classic Fabric Sofa Set">
          <p class="topic">Classic Fabric Sofa Set</p>
          <p class="price">₹28,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Classic Fabric Sofa Set">
<input type="hidden" name="price" value="28000">
<input type="hidden" name="image" value="../images/sofa6.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa7.jpeg" class="card-img-top" alt="Modern Wooden Frame Sofa Set">
          <p class="topic">Modern Wooden Frame Sofa Set</p>
          <p class="price">₹38,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Modern Wooden Frame Sofa Set">
<input type="hidden" name="price" value="38000">
<input type="hidden" name="image" value="../images/sofa7.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5 mb-5">
      <div class="card">
        <div class="card-body">
          <img src="../images/sofa8.jpeg" class="card-img-top" alt="Luxe Leather Sofa Set">
          <p class="topic">Luxe Leather Sofa Set</p>
          <p class="price">₹50,000</p>
          <form method="post" action="add_to_cart.php">
          <input type="hidden" name="name" value="Luxe Leather Sofa Set">
<input type="hidden" name="price" value="50000">
<input type="hidden" name="image" value="../images/sofa8.jpeg">

        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
        </div>
      </div>
    </div>
  </div>

  <?php
include('footer.php');
?>
=======
  
  <!-- CSS files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css"> <!-- Link to external CSS file -->
  <title>FURNITURE</title>
</head>

<body>
  <!-- JavaScript file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <?php include('header.php'); ?>

  <div class="container mt-5">
    <div class="row g-4">
      <?php
      // Start the session for cart management
      session_start();
>>>>>>> main

      // Database connection
      $servername = "localhost";
      $username = "root"; // your database username
      $password = ""; // your database password
      $dbname = "furnio_db"; // your database name

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Query to get the product data
      $sql = "SELECT id, image, name, price FROM products"; // Assuming your table is named 'products'
      $result = $conn->query($sql);

      // Check if there are any results
      if ($result->num_rows > 0) {
          // Output data for each row
          while($row = $result->fetch_assoc()) {
              echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
              echo "<div class='card h-100' style='border: 1px solid rgb(233, 229, 229); border-radius: 30px; background-color: #eff6ee; padding: 20px; text-align: center; height: 400px;'>";
              echo "<img src='" . $row['image'] . "' class='card-img-top' alt='" . $row['name'] . "' style='width: 100%; height: 200px; border-radius: 10px; margin: 0 auto;'>";
              echo "<div class='card-body'>";
              echo "<p class='topic' style='font-weight: bolder; font-size: large; font-family: Georgia, Times, serif; margin-top: 10px; text-align: center;'>" . $row['name'] . "</p>";
              echo "<p class='price' style='font-weight: bold; font-size: medium; font-family: Georgia, Times, serif; margin-top: 10px; text-align: center;'>₹" . number_format($row['price'], 0, '.', ',') . "</p>";

              // Add to cart button with session handling
              echo "<div class='d-grid'>
                      <a href='./cart.php?action=add&id={$row['id']}' 
                         class='btn btn-dark' 
                         style='display: flex; justify-content: center; height: 40px; align-items: center; border: none; border-radius: 8px; background-color: #273043; color: white;'>
                         Add to cart
                      </a>
                    </div>";
              echo "</div>";  // Close card-body
              echo "</div>";  // Close card
              echo "</div>";  // Close col
          }
      } else {
          echo "No products found.";
      }

      // Close connection
      $conn->close();
      ?>
    </div> <!-- End of row -->
  </div> <!-- End of container -->

  <?php include('footer.php'); ?>
</body>

</html>
