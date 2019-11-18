<?php
require_once("model-dept.php");
try{
    $dbh = new PDO(
        'mysql:host=localhost;dbname=ville;charset=utf8',
        'root',
        '',
        array(PDO::ATTR_PERSISTENT => true)
    );
}catch (PDOException $e){
    echo " erreur PDO: " .$e->getMessage() . "\n";
    exit();
}

createDepartement('18', 'azerty');
$aDepartement = readDepartement('AZ');
print_r($aDepartement);

deleteDepartement('AZ');
print_r(indexDepartement());

updateDepartement('AZ', "poiuytr");
$aDepartement = readDepartement('AZ');
print_r($aDepartement);

deleteDepartement('AZ');
print_r(indexDepartement());



//fermeture connexion DB 
$dbh =null;