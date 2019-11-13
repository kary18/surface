<?php
function afficheEntete()
{
//  echo "  Longueur  |  Largeur  | Surface   |\n";
  printf("| %20s | %9s | %9s | %9s |\n", "piece", "Longueur", "Largeur", "Surface");
}
//function afficheLigne($piece, $long, $larg)
function afficheLigne($unePiece)
{
  if (
    is_string($unePiece['piece']) && 
    is_numeric($unePiece['longueur']) && 
    is_numeric($unePiece['largeur']) ) {

    printf(
    "| %20s | %9.2f | %9.2f | %9.2f |\n", 
    $unePiece['piece'], 
    $unePiece['longueur'], 
    $unePiece['largeur'], 
    calculSurface($unePiece['longueur'], $unePiece['largeur'])
);
  } else {
    echo "Erreur données:". var_dump($unePiece['longueur']). var_dump($unePiece['largeur']). "\n" ;
  }
//  echo " $long | $larg | ".calculSurface($long, $larg)." \n";
}
function calculSurface($long, $larg)
{
  if ( is_numeric($long) && is_numeric($larg) ) {
    $surface = $long * $larg;
  } else {
    echo "Erreur données:". /*var_dump($long). var_dump($larg) */"\n" ;
  }
  return($surface);
}

