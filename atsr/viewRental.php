<?php

  require __DIR__.'/vendor/autoload.php';

  use Kreait\Firebase\Factory;
  use Google\Cloud\Firestore\FirestoreClient;




  $factory = (new Factory)->withServiceAccount('capstone.json');
  $firestore = $factory->createFirestore();
  $database = $firestore->database();
  $collection = $database->collection('buildingInfo');
  $docRef = $collection->document('khe');
  $snapshot = $docRef->snapshot();

  $querySnapshot = $collection->documents();



?>

<html>
  <head>
    <link rel="icon" type="image/png" href="img/SBLogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>View Rental Order</Title>
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
              <a class="nav-link" href="placeRental.php">Place Rental Order</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="viewRental.php">View Rental Order</a>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container mt-5">

        <div class="input-group mb-3">
          <input type="text" class="form-control" id="rentalNumber" placeholder="Rental ID Number" aria-label="Rental Number" aria-describedby="basic-addon2">
          <span class="input-group-text" >Rental ID Number</span>
        </div>

        <button type="button" class="btn btn-secondary " onclick="searchRentalNumber()">Search</button>

        <div id="showOrderDetails" class="d-none  mt-3">
          <div class="mt-2">Full Name: <span id='fullName'></span></div>
          <div class="mt-2">Phone Number: <span id='phoneNumber'></span></div>
          <div class="mt-2">Email: <span id='email'></span></div>
          <div class="mt-2">Address: <span id='address'></span></div>
          <div class="mt-2">Professional Role: <span id='professionalRole'></span></div>
          <div class="mt-2">Order Details: <span id='orderDetails'></span></div>
          <div class="mt-2">Delivery Date: <span id='deliveryDate'></span></div>
          <div class="mt-2">Return Date: <span id='returnDate'></span></div>
          <div class="mt-2">Card Number: <span id='cardNumber'></span></div>
          <div class="mt-2">CVC: <span id='cvc'></span></div>
          <div class="mt-2">Expiry Date: <span id='expiry'></span></div>
        </div>

        <div id="errorMessage" class="d-none mt-3">
          <div>You have entered an invalid order number</div>
        </div>

    </body>



    <script type="text/javascript" src="js/rental.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
