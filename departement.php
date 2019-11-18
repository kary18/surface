<?php
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