<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.css">
    
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- start navbar -->
     <?php 
     include('header.php');

     ?>
  
    <div class="form-container">
        <form action="welcome.php" method="post">
            <h2>Contact Us</h2>

            <b><label for="name">Name:</label></b>
            <input type="text" id="name" name="name" required><br>

            <b><label for="sername">Surname:</label></b>
            <input type="text" id="sername" name="surname" required><br>

            <b><label for="email">Email:</label></b>
            <input type="email" id="email" name="email" required><br>

            <b><label for="message">Message:</label></b>
            <textarea id="message" name="message" required></textarea><br>

            <input type="submit" value="Submit">

        </form>
    </div>

    <?php
    include('footer.php');
    ?>
</body>

</html>