<!doctype html>
<html>
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<head>
<meta charset="UTF-8">
<title>View Rental</title>

    <style>
        .viewtable{
            padding:10px;
              border-spacing: 50px 0;    
                     

        }

        .td{
            padding: 10px 0;


        }
                table, th, td {
  border: 1px solid black;
}
        table {
  width: 70%;
}

    </style>
</head>

<body>
    
	<nav>
    <div class="logo">
        <h4> ATSR </h4>
    </div>
    <ul class="nav-links">
        <li> <a href="home.php">Home</a></li>
        <li> <a href="about.php">About</a></li>
        <li> <a href="index.php">Create Rental</a></li>
        <li> <a href="viewrental.php">View Rentals</a></li>
    </ul>

    </nav>
	
	<div class="footer"> <!--code taken from AnAirCode.ca. Website does not indicate an author-->
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
       <h3>Have any Questions? Email us at:
    <br>helpdesk@ATSR.ca</h3>
</div>
</div>
</div>
</div>
	<div class="header"> 
	<header> <h1>View Rental</h1></header>
	</div>	
   
        <br />
        <br />
        <div class="personal">
            <h2>Enter Your Order ID</h2>
        </div>
        <br />

        <form action="" method="post">

            <div class="formheader">Name</div>
            <input type="text" name="OrderID" id="OrderID" placeholder="Enter Your Order ID" />
            <input type="Submit" name=" Search" value="SEARCH BY ID" />

        </form>
    <center>
        <div class="viewtable">
            <table>
                <tr>
                    <th> OrderID</th>
                    <th> Customer Account ID</th>
                    <th> Order Details</th>
                    <th> Return Date</th>
                    <th> Order Rate</th>
                    <th> Updated Order Exists?</th>

                </tr>



                <?php

            $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "atsr";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

            if (isset($_POST['Search']))

            {

                $OrderID = $_POST['OrderID'];

                $query = "SELECT * FROM orders where OrderID = '$OrderID' ";
                $query_run= mysqli_query($conn,$query);

                while ($row =mysqli_fetch_array($query_run))

                {
                ?>
                <tr>
                    <td>
                        <?php echo $row ['OrderID']; ?>
                    </td>


                    <td>
                        <?php echo $row ['Customer_AccountID']; ?>
                    </td>
                    <td>
                        <?php echo $row ['Order_Details']; ?>
                    </td>
                    <td>
                        <?php echo $row ['Return_Date']; ?>
                    </td>
                    <td>
                        <?php echo $row ['Order_Rate']; ?>
                    </td>
                    <td>
                        <?php echo $row ['Updated_Order_Exists']; ?>
                    </td>
                </tr>

                <?php

                }
            }
                ?>

            </table>

        </div>
    </center>
</body>
</html>