<?php

  require __DIR__.'/vendor/autoload.php';

  use Kreait\Firebase\Factory;
  use Google\Cloud\Firestore\FirestoreClient;





?>

<html>
  <head>
    <link rel="icon" type="image/png" href="img/SBLogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Welcome to the Rental Portal</Title>
  </head>

    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php">
              <img src="img/SBLogo.png" width="30" height="30" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">


              <li class="nav-item">
                <a class="nav-link" href="viewRental.php">View Existing Rental</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="placeRental.php">Create Rental</a>
              </li>

            </ul>
          </div>
        </nav>



      <div class="d-flex justify-content-center my-5">
        <a href="placeRental.php" class='text-dark'>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Place Rental Order</h5>
              <p class="card-text">Fill out this form to place to book a rental order.</p>
            </div>
          </div>
        </a>
      </div>


      <div class="d-flex justify-content-center my-5">
        <a href="viewRental.php" class='text-dark'>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">View Rental Order</h5>
              <p class="card-text">View details of your order.</p>
            </div>
          </div>
        </a>
      </div>

    </body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
