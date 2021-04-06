
<?php


$Person_Name = $_POST['Person_Name'];
$Person_Phone_Number = $_POST['Person_Phone_Number'];
$Person_Email = $_POST['Person_Email'];
$Person_Address= $_POST['Person_Address'];
$Person_Role = $_POST['Person_Role'];

$Order_Details = $_POST['Order_Details'];
$Start_Date = $_POST['Start_Date'];
$Return_Date = $_POST['Return_Date'];
$Payment_Method_Details = $_POST['Payment_Method_Details'];
$CVC = $_POST['CVC'];
$Expiry_Date = $_POST['Expiry_Date'];





    $conn = new mysqli('localhost', 'root','','atsr');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into Persons(Person_Name, Person_Phone_Number, Person_Email, Person_Address,
           Person_Role) values (?, ?, ?, ?, ?)");


       $stmt ->bind_param ('sisss',$Person_Name, $Person_Phone_Number, $Person_Email, $Person_Address, $Person_Role);



       

       $stmt1 = $conn->prepare("insert into Orders( Order_Details, Start_Date, Return_Date) values ( ?, ?, ?)");
       $stmt1->bind_param ('sss', $Order_Details, $Start_Date, $Return_Date);

       $stmt2 = $conn->prepare("insert into Payment_Method(Payment_Method_Details, CVC, Expiry_Date) values (?, ?, ?)");
       $stmt2->bind_param ('sss', $Payment_Method_Details, $CVC, $Expiry_Date);

       



       $stmt-> execute();
       $stmt1-> execute();
       $stmt2->execute();
      
       echo "Order Requested";
       $stmt -> close();
       $stmt1 -> close();
       $stmt2 ->close ();
      
       $conn->close();

    }

{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "atsr";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    }





?>