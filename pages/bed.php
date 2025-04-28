<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/product.css">

    <title>Document</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



        
    
        <?php
         include('header.php');
   ?>
    <!-- bed set product -->

    <?php
    include 'db_connect.php'; 

    ?>

    <div class="row">
        <div class="col-sm-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <img src="../images/bed1.jpeg" class="card-img-top" alt="...">
                    <p class="topic">Elegant Wooden Bed Set </p>
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
                    <img src="../images/bed2.jpeg" class="card-img-top" alt="...">
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
                    <img src="../images/bed3.jpeg" class="card-img-top" alt="...">
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
                    <img src="../images/bed4.jpeg" class="card-img-top" alt="...">
                    <p class="topic">Classic Steel Bed Set </p>
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

        <div class="col-sm-3 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <img src="../images/bed5.jpeg" class="card-img-top" alt="...">
                    <p class="topic">Classic Steel Bed Set </p>
                    <p class="price">₹22,000</p>
                     <form method="post" action="add_to_cart.php">
        <input type="hidden" name="name" value="Classic Steel Bed Set ">
        <input type="hidden" name="price" value="22000">
        <input type="hidden" name="image" value="../images/bed5.jpeg">
        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <img src = "../images/bed12.jpg" class="card-img-top" alt = "...">
                    <p class="topic">sheesham wood king size double bed </p>
                    <p class="price">₹25,000</p>
                     <form method="post" action="add_to_cart.php">
        <input type="hidden" name="name" value="sheesham wood king size double bed">
        <input type="hidden" name="price" value="25000">
        <input type="hidden" name="image" value="../images/bed12.jpg">
        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
                </div>
            </div>
        </div>
        

        <div class="col-sm-3 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <img src = "../images/bed8.jpg" class="card-img-top" alt = "...">
                    <p class="topic">coaster devon king</p>
                    <p class="price">₹35,000</p>
                     <form method="post" action="add_to_cart.php">
        <input type="hidden" name="name" value="coaster devon king">
        <input type="hidden" name="price" value="35000">
        <input type="hidden" name="image" value="../images/bed8.jpg">
        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
                </div>
            </div>
        </div>


        <div class="col-sm-3 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <img src="../images/bed13.webp" class="card-img-top" alt="...">
                    <p class="topic">wooden craftico bed set</p>
                    <p class="price">₹50,000</p>
                     <form method="post" action="add_to_cart.php">
        <input type="hidden" name="name" value="wooden craftico bed set">
        <input type="hidden" name="price" value="50,000">
        <input type="hidden" name="image" value="../images/bed13.webp">
        <button type="submit" class="btn btn-dark">Add to Cart</button>
      </form>
                </div>
            </div>
        </div>
        

    </div>

    

    
    <!-- end bedset -->









    <?php
    include('footer.php');
    ?>
</body>

</html>