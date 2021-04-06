<?php
  require __DIR__.'/vendor/autoload.php';
  $rentalNumber = $_POST['rentalNumber'];


  use Kreait\Firebase\Factory;
  use Google\Cloud\Firestore\FirestoreClient;





  $factory = (new Factory)->withServiceAccount('atsrproject-c4cd9-firebase-adminsdk-lh4iw-87969603de.json');
  $firestore = $factory->createFirestore();
  $database = $firestore->database();
  $collection = $database->collection('Orders');
  $docRef = $collection->document(htmlspecialchars($rentalNumber));
  //displays the one day
  $snapshot = $docRef->snapshot();

  //Grabs all documents
  $querySnapshot = $collection->documents();





  echo json_encode(array($snapshot->data()));

?>
