<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/about.css">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <?php
   include('header.php');
   ?>



    <div class="card bg-dark text-white">
        <img src="../images/aboutim.jpeg" class="card-img" style="height: 650px; max-width: 100%;" alt="...">
        <div class="card-img-overlay">
            <h1 class="card-title">About Us</h1>
            <p class="card-text">We believe in transforming spaces with style and comfort. Explore our curated
                collection designed to enhance your home and elevate your lifestyle.</p>
            <div class="button ">
                <a href="./product.php" class="btn ">Explore Products</a>
            </div>
        </div>
    </div>


    <h1 class="who">Who are we ?</h1>
    <div class="container text-center">

        <div class="image-container">
            <img src="../images/about.jpeg" alt="About Us" class="about-image">
        </div>

        <div class="text-content">
            <p>Welcome to our website! We are dedicated to providing the best services and products to our customers.
                Our mission is to create a positive impact in our community through quality and commitment.</p>
            <p>Our team is made up of experienced professionals who are passionate about what they do. We believe in
                continuous improvement and strive to exceed expectations.</p>
        </div>
    </div>

    <div class="container text-center">
        <h1 class="title">Our Beliefs </h1>
        <div class="image-container">
            <img src="../images/about3.jpeg" alt="About Us" class="about-image">
        </div>

        <div class="text-content">
            <p>We believe in delivering exceptional quality in every product we offer. </p>
            <p>Our commitment to excellence ensures that our customers receive only the best.</p>
        </div>
    </div>

    <div class="container text-center">
        <h1 class="title">Our Mission </h1>
        <div class="image-container">
            <img src="../images/about4.jpeg" alt="About Us" class="about-image">
        </div>

        <div class="text-content">
            <p>At Furnio, our mission is to provide beautifully crafted furniture that transforms spaces and enhances
                lifestyles. </p>
            <p style="margin-bottom: 30px;">We are dedicated to offering high-quality, stylish, and functional pieces
                that meet the diverse needs of
                our customers. </p>
        </div>
    </div>


    <?php
   include('footer.php');
   ?>

</body>

</html>