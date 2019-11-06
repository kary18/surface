<?php
require_once("functions.php");

$chaine = "bonjour";
$larg = 7;
$long = 10;

afficheEntete();
afficheLigne($long, $larg);
calculSurface($long, $larg);
afficheLigne($chaine, $long);