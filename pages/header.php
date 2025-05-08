<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--  Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Your custom styles -->
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/product.css">

  <title>Document</title>
</head>

<body>

  <!-- start navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        𝓕𝓾𝓻𝓷𝓲𝓸
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto gap-5">
          <li class="nav-item">
            <a class="nav-link" href="../pages/about.php">𝓐𝓫𝓸𝓾𝓽 𝓤𝓼</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" aria-label="Toggle navigation">
              𝓢𝓱𝓸𝓹
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             
              <li><a class="dropdown-item" href="./almirah.php">𝓐𝓵𝓶𝓲𝓻𝓪𝓱</a></li>
              <li><a class="dropdown-item" href="./bed.php">𝓑𝓮𝓭 𝓢𝓮𝓽</a></li>
              <li><a class="dropdown-item" href="./sofa.php">𝓢𝓸𝓯𝓪 𝓢𝓮𝓽</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../pages/contactus.php">𝓒𝓸𝓷𝓽𝓪𝓬𝓽 𝓤𝓼</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->


  <?php
// Make sure session is started and user is authenticated
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

