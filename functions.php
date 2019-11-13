<?php
function afficheEntete()
{
//  echo "  Longueur  |  Largeur  | Surface   |\n";
  printf("| %20s | %9s | %9s | %9s |\n", "piece", "Longueur", "Largeur", "Surface");
}
function afficheLigne($piece, $long, $larg)
{
  if (is_string($piece) &&  is_numeric($long) && is_numeric($larg) ) {
    printf("| %20s | %9.2f | %9.2f | %9.2f |\n", $piece, $long, $larg, calculSurface($long, $larg));
  } else {
    echo "Erreur données:". /*var_dump($long). var_dump($larg)*/ "\n" ;
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

