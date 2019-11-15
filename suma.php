<?php
/*x = $_GET["a"]
$y = $_GET["b"]
$s = $x + $y;

echo $s;
*/

$x=218;
$y=158;
if ($x<$y) {
    echo $x;
} else {
    echo $y;
}

$A=8;
$B=3;
if ($A%2==0) {
    echo 'Da';
} else {
    echo'Nu';
}

$x=9;
$y=4;
$z=7;

if ($x<= $y) {
    if ($x<=$z)
    echo"Numarul minim este $x.";
}

 elseif ($y <= $z){
   
    echo "Numarul minim este $y.";
}
    elseif ($z <= $x){
        echo"Numarul minim este $z.";
}

$i= date('w'); // ziua din saptamana
$zi = array(); // Array
$zi['1'] = 'Luni';
$zi['2'] = 'Marti';
$zi['3'] = 'Miercuri';
$zi['4'] = 'Joi';
$zi['5'] = 'Vineri';
$zi['6'] = 'Sambata';
$zi['7'] = 'Duminica';
switch ($i) {
    case 1 : echo "Azi este $zi[$i]";
    break;
    case 2 : echo "Azi este $zi[$i]";
    break;
    case 3 : echo "Azi este $zi[$i]";
    break;
    case 4 : echo "Azi este $zi[$i]";
    break;
    case 5 : echo "Azi este $zi[$i]";
    break;
    case 6 : echo "Azi este $zi[$i]";
    break;
    case 7 : echo "Azi este $zi[$i]";
    break;
}

$i=0;
while ($i<= 15){
echo $i;
echo "<br />";
$i++;
}

$j=0;
do{
    echo $j;
    echo "<br>";
    $j++;
} while ($j <=12)

for ($=0; $k<=14; $k++){
    echo $k;
    echo "<br>";
}


?>