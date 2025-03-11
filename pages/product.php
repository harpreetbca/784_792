<?php
session_start();

// Add product to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_name'], $_POST['product_price'])) {
    $product = [
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price']
    ];
    $_SESSION['cart'][] = $product;
    header('Location: cart.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">
  <title>Products</title>
</head>
<body>
  
<?php include('header.php'); ?>

<div class="container">
  <h2 class="text-center my-4">Products</h2>
  <div class="row">
    
    <?php 
    $products = [
      ["id" => 1, "name" => "Classic Wooden Almirah", "price" => "25000", "image" => "../images/almirah2.jpeg"],
      ["id" => 2, "name" => "Royal Steel Wardrobe", "price" => "18000", "image" => "../images/almirah.jpeg"],
      ["id" => 3, "name" => "Vintage Teak Almirah", "price" => "30000", "image" => "../images/almirah3.jpeg"],
      ["id" => 4, "name" => "Modern Steel Closet", "price" => "22000", "image" => "../images/almirah4.jpeg"]
    ];
    
    foreach ($products as $product) {
      echo "<div class='col-sm-3 mt-5'>
              <div class='card'>
                <div class='card-body'>
                  <img src='{$product['image']}' class='card-img-top' alt='Product Image'>
                  <p class='topic'>{$product['name']}</p>
                  <p class='price'>₹{$product['price']}</p>
                  <form action='' method='post'>
                    <input type='hidden' name='product_name' value='{$product['name']}'>
                    <input type='hidden' name='product_price' value='{$product['price']}'>
                    <button type='submit' class='btn btn-dark'>Add to Cart</button>
                  </form>
                </div>
              </div>
            </div>";
    }
    ?>
  </div>
</div>

<a href="cart.php" class="btn btn-primary mt-4">View Cart</a>

<?php include('footer.php'); ?>

</body>
</html>
