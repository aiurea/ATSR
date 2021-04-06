<?php
  require __DIR__.'/vendor/autoload.php';
  $Name = $_POST['Name'];
  $Phone_Number = $_POST['Phone_Number'];
  $Email = $_POST['Email'];
  $Address = $_POST['Address'];
  $Professional_Role = $_POST['Professional_Role'];
  $Order_Details = $_POST['Order_Details'];
  $Delivery_Date = $_POST['Delivery_Date'];
  $Return_Date = $_POST['Return_Date'];
  $CC_number = $_POST['CC_number'];
  $CVC = $_POST['CVC'];
  $Expiry_Date = $_POST['Expiry_Date'];
  $Order_Number = rand(1000000, 9999999);

  use Kreait\Firebase\Factory;
  use Google\Cloud\Firestore\FirestoreClient;




  $factory = (new Factory)->withServiceAccount('atsrproject-c4cd9-firebase-adminsdk-lh4iw-87969603de.json');
  $firestore = $factory->createFirestore();
  $database = $firestore->database();
  $collection = $database->collection('Orders');

  $data = [
    "Name" => htmlspecialchars($Name),
    "Phone_Number" => htmlspecialchars($Phone_Number),
    "Email" => htmlspecialchars($Email),
    "Address" => htmlspecialchars($Address),
    "Professional_Role" => htmlspecialchars($Professional_Role),
    "Order_Details" => htmlspecialchars($Order_Details),
    "Delivery_Date" => htmlspecialchars($Delivery_Date),
    "Return_Date" => htmlspecialchars($Return_Date),
    "CC_number" => htmlspecialchars($CC_number),
    "CVC" => htmlspecialchars($CVC),
    "Expiry_Date" => htmlspecialchars($Expiry_Date),
  ];

  $collection->document(htmlspecialchars($Order_Number))->set($data);

  echo htmlspecialchars($Order_Number);
?>
