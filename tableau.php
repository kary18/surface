<?php
$a= [1,13,17,5];
print_r($a);
echo "2eme element:" . $a[1] . "\n";

$a[] = 28;
$a[5] = 32;
$a[7] = 30;
$a[3] = 80;
$a[] = 10;

unset($a[7]);
echo "nombre elements:" . count($a) . "\n";
print_r($a);

//boucle while
echo "boucle while". "\n";
$i = 0;
while ($i < count($a)) {
    echo "acces direct " .$i. " element:" .$a[$i] ."\n";
   // $i++;
    //$i =$i +1;
    $i += 1;
}
//boucle for 
echo "boucle for". "\n";
for($i=0;$i<count($a);$i+=$i +1){
    echo "acces direct " .$i. " element:" .$a[$i] ."\n";
}
//foeach
echo "foreach". "\n";
foreach ($a as $key => $valeur){
    echo"direct acces " . $key. " element:" . $valeur . "\n";
}
