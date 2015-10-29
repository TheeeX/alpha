<?php
   echo"test!!";

   $dbname = 'artistarc_alpha';
  
try{
 
$m = new MongoClient( "mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408/artistarc_alpha" ); // connect to a remote host at a given port
   echo "Connection to database successfully<br>";
$db = $m->$dbname;
   echo "Database ". $dbname ." selected<br>";

$collection = $db->artist_reg;
$cursor = $collection->find();
    echo "success!<br>";

 foreach ($cursor as $document) {
      echo $document["name"] . "\n";
   }
} catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "<br />";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
