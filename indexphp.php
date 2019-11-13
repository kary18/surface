<?php
require_once("functions.php");
afficheEntete();
/*
afficheLigne('salle de bain',4, 3);
afficheLigne('sallon',2.5, 5);
afficheLigne('cuisine',6, 2);
*/

$unePiece['piece'] = 'Salle de bain';
$unePiece['largeur'] = 5;
$unePiece['longueur'] = 3;
$unePiece['surface'] = calculSurface($unePiece['largeur'],$unePiece['longueur']);

//print_r($unePiece);
$uneAutrePiece['piece'] = 'Salon';
$uneAutrePiece['largeur'] = 7;
$uneAutrePiece['longueur'] = 8;
$uneAutrePiece['surface'] = calculSurface($uneAutrePiece['largeur'],$uneAutrePiece['longueur']);

//print_r($uneAutrePiece);
$listePieces = array();
$listePieces[0] = $unePiece;
$listePieces[1] = $uneAutrePiece;

//print_r($listePieces);

foreach ($listePieces as $key => $value){
    //print_r ($value);
    afficheLigne($value['piece'], $value['longueur'], $value['largeur']);
}