<?php

echo "Les boucles c'est cool";

echo "<hr/>";

// FOR //

for($i = 0; $i < 7; $i++)
{

echo $i;
echo "<br/>";

}

// 1ere étape: je donne la valeur a $i
// 2ème étape: je verifie si la condition est toujours vraie.

echo "<hr/>";

// WHILE // tant que //

$j = 0;
while($j < 5)
{
    echo $j;
    echo "<br/>";
    $j++;
}

echo "<hr/>";

// DO - WHILE //
$z = 0;
do {
    echo $z;
    echo "<br/>";
    $z++;
}while ($z < 6);


?>