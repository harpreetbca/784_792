<?php
session_start();
include('header.php');
?>

<h2 class="text-center mt-4">Your Cart</h2>
<div class="container">
  <div class="row">

    <?php
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $item) {
            echo '<div class="col-sm-3 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="' . $item['image'] . '" class="card-img-top" alt="' . $item['name'] . '">
                            <p class="topic">' . $item['name'] . '</p>
                            <p class="price">₹' . $item['price'] . '</p>
                        </div>
                    </div>
                  </div>';
        }
        echo '<div class="text-center my-4">
                <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
              </div>';
    } else {
        echo "<p class='text-center mt-4'>Your cart is empty.</p>";
    }
    ?>

  </div>
</div>

<?php include('footer.php'); ?>
