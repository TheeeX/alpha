<?php
// Config
$dbhost = 'localhost';
$dbname = 'artistarc_alpha';
 
// connect to mongodb MongoLab
//$m = new MongoClient();
$m = new MongoClient( "mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408/artistarc_alpha" ); // connect to a remote host at a given port

  echo "Connection to database successfully<br>";
//select database
//$db = $m->$dbname;
//  echo "Database ". $dbname ." selected<br>";

// select the collection
//$collection = $db->artist_reg;
// pull a query
/*
$cursor = $collection->find();
 
 echo "success!<br>";

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
*/
?>