<?php
ini_set("display_errors", "On");
 
try{
    $db = new Mongo("mongodb://karanjeet96:wazxdws123@ds052408.mongolab.com:52408/artistarc_alpha");
    $registrations = $db->selectCollection('artistarc_alpha', 'registrations');
        echo "sucess!<br />";
}catch (Exception $e){
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
