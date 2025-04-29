<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css"> <!-- Your custom CSS -->
  <title>FURNITURE - Almirah Products</title>
</head>

<body>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <?php include('header.php'); ?>

  <div class="container mt-5">
    <div class="row g-4">
      <?php
      session_start();

      // Database connection
      $conn = new mysqli("localhost", "root", "", "furnio_db");

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Only fetch products that contain "almirah" in their name
      $sql = "SELECT id, image, name, price FROM products WHERE name LIKE '%bed%'";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<div class='col-sm-6 col-md-4 col-lg-3'>";
              echo "<div class='card h-100' style='border: 1px solid rgb(233, 229, 229); border-radius: 30px; background-color: #eff6ee; padding: 20px; text-align: center; height: 400px;'>";

              // Image with border radius
              echo "<img src='" . $row['image'] . "' class='card-img-top' alt='" . $row['name'] . "' style='width: 100%; height: 200px; object-fit: cover; border-radius: 10px;'>";

              echo "<div class='card-body'>";
              echo "<p class='topic' style='font-weight: bolder; font-size: large; font-family: Georgia, Times, serif; margin-top: 10px; text-align: center;'>" . $row['name'] . "</p>";
              echo "<p class='price' style='font-weight: bold; font-size: medium; font-family: Georgia, Times, serif; margin-top: 10px; text-align: center;'>₹" . number_format($row['price'], 0, '.', ',') . "</p>";
              echo "<div class='d-grid'>
              <a href='./cart.php?action=add&id={$row['id']}' 
                 class='btn btn-dark' 
                 style='display: flex; justify-content: center; height: 40px; align-items: center; border: none; border-radius: 8px; background-color: #273043; color: white;'>
                 Add to cart
              </a>
            </div>";
              echo "</div>";  // card-body
              echo "</div>";  // card
              echo "</div>";  // col
          }
      } else {
          echo "<p class='text-center'>No Bed products found.</p>";
      }

      $conn->close();
      ?>
    </div> <!-- End row -->
  </div> <!-- End container -->

  <?php include('footer.php'); ?>
</body>

</html>
