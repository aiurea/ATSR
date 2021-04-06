

<!doctype html>


<html>
	<link rel="stylesheet" href="stylesheet.css" Website/stylesheet.css">
	<link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<head>
<meta charset="UTF-8">
<title>Create Rental</title>
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
	<header> <h1>Create Rental</h1></header>
	</div>
	
	<br>
	<div class="personal">
	<h2>Contact Information</h2>
	</div>
	<br>
	
		<form action = "connect.php" method = "post"> 
			
			<div class = "formheader">Name</div>
			<input type="text" name="Person_Name" id = "Person_Name" placeholder="Full Name">
			<div class = "formheader">Phone Number</div>
			<input type="text" name= "Person_Phone_Number" id = "Person_Phone_Number" placeholder = "(000)-000-0000">
			<div class = "formheader">Email</div>
			<input type="text" name ="Person_Email" id = "Person_Email" placeholder = "Email">
			<div class = "formheader">Address</div>
			<input type="text" name ="Person_Address" id= "Person_Address" placeholder = "Street, City, Province, Country, Postal Code">
			<div class = "formheader">Professional Role</div>
			<input type="text" name = "Person_Role"  id =  "Person_Role" placeholder = "Professional Role">
            <div class="input-group">
               
</div>
	
            
			<br>
			<br>
	
			<div class= "Tools">Select Tools and Dates</div>
			<br>
			
			<img src="tools.png" alt="tools and rates" height="500px" width="520px" />
				
			<br />

			<input type="text" name= "Order_Details" id = "Order_Details" placeholder = "Describe your order">
            
</div>
	
			<br>
			 <div class="item">
	  <p>Delivery Date</p>
          <input type="date" name="Start_Date" id="Start_Date" />
          <i class="fas fa-calendar-alt"></i>
        </div>
        
	<br>
		 <div class="item">
	  <p>Return Date</p>
          <input type="date" name="Return_Date" id="Return_Date"/>
          <i class="fas fa-calendar-alt"></i>
        </div>

    
       
			
			<div class="input-group">
                <div class="input-box">
                    <div class= "Tools">Payment Details</div>
					<br>
<input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                   
                </div>
</div>
				Credit Card Number
<div class="input-group">
                <div class="input-box">
                    <input type="text" Name= "Payment_Method_Details" id= "Payment_Method_Details" placeholder="Card Number" required class="name">
                    
                </div>
</div>			

<div class="input-group">
                <div class="input-box">
                    <input type="text" name="CVC" id="CVC" placeholder="Card CVC" required class="name">
                    
                </div>
		
	<br />
<div class="item">
                  <input type="date" name="Expiry_Date" id="Expiry_Date" placeholder="yymmdd" required class="name">
                    <i class="fas fa-calendar-alt"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <button type="submit">Submit Request</button>

                </div>
</div>
	
	 </form>
	

	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
	
	
	
</body>
</html>



