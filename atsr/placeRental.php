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
    <Title>Place Rental Order</Title>
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
        <div id="orderForm">

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Name" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon2">
            <span class="input-group-text" >Full Name</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Phone_Number" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon2">
            <span class="input-group-text" >Phone Number</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control"  id="Email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
            <span class="input-group-text">Email</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Address" placeholder="Address" aria-label="Address" aria-describedby="basic-addon2">
            <span class="input-group-text" >Address</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Professional_Role" placeholder="Professional Role" aria-label="Professional Role" aria-describedby="basic-addon2">
            <span class="input-group-text" >Professional Role</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control"  id="Order_Details" placeholder="Order Details" aria-label="Order Details" aria-describedby="basic-addon2">
            <span class="input-group-text">Order Details</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Delivery_Date" placeholder="Delivery Date" aria-label="Delivery Date" aria-describedby="basic-addon2">
            <span class="input-group-text" >Delivery Date</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Return_Date" placeholder="Return Date" aria-label="Return Date" aria-describedby="basic-addon2">
            <span class="input-group-text" >Return Date</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control"  id="CC_number" placeholder="Card Number" aria-label="Card Number" aria-describedby="basic-addon2">
            <span class="input-group-text">Card Number</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="CVC" placeholder="CVC" aria-label="CVC" aria-describedby="basic-addon2">
            <span class="input-group-text" >CVC</span>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" id="Expiry_Date" placeholder="Expiry Date" aria-label="Expiry Date" aria-describedby="basic-addon2">
            <span class="input-group-text" >Expiry Date</span>
          </div>

        <button type="button" class="btn btn-secondary " onclick="placeRentalOrder()">Place Order</button>
      </div>
        <div id="orderPlaced" class="d-none mt-3">
          <div>Your order has been placed! Your order number is: <span id="orderNumber"></span></div>
        </div>



      </div>
    </body>



    <script type="text/javascript" src="js/rental.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
