<?php
// 1
$x = 0;
while ($x <= 10) {
    echo "La variable x vaut $x <br>";
    $x++;
}

echo "<br>";
// 2
$a = 0;
$b = 60;

do {
    $c = $a * $b;
    echo "Le resulat est $c <br>";
    $a++;
}
while ($a < 20);

echo "<br>";
// 3
$d = 100;
$e = 10;

do {
    $f = $d * $e;
    echo "Le resultat est $f <br>";
    $d--;
}
while ($d >= 10);

echo "<br>";
// 4
$g = 1;
for ($g = 1 ; $g < 10 ; $g += 0.5) {
    echo "Le resultat est $g <br>";
}

echo "<br>";
// 4 autre déduction
$g2 = 1;
while ($g2 < 10) {
    echo "La variable vaut $g2 <br>";
    $g2 += $g2/2;
}

echo "<br>";
// 5
for ($h = 1 ; $h <= 15 ; $h++) {
    echo "$h On y arrive presque <br>";
}

echo "<br>";
// 6
for ($i = 20 ; $i <=0 ; $i--) {
    echo "$i C'est presque bon <br>";
}

echo "<br>";
// 7
for ($j = 1 ; $j >=100 ; $j += 15) {
    echo "$j On tient le bon bout <br>";
}

echo "<br>";
// 8
for ($k = 200 ; $k <= 0 ; $k -= 12) {
    echo "$k Enfin !!! <br>";
}
