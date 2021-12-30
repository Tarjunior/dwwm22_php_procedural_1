<?php

echo "Les conditions c'est la vie";

echo "<br/>";
echo "<hr/>";

// IF et ELSE
// Si (condition est vraie), tu lis ce code,
// SINON tu lis cet autre code

$age = 19;

if($age >= 18)
{
    echo "Tu es majeur";
}else
{
    echo "Tu es mineur";
}

echo "<br/>"; 

$ville = "Paris";
$pays = "France";

// Lorsque j'utilise le mot cle AND ->&&
// Il faut que les deux conditions (ou plus) soient toutes vraies.

if($ville === "Paris" && $pays === "France")
{
    echo "Vous êtes bien en France et à Paris";
}

echo "<br/>";
echo "<hr/>";

// Si j'utilise un operateur du type: OR -> ||
// Il faut que une des deux conditions soient vraies.

if($ville === "Lyon" || $pays === "France")
{
    echo "Vive la France";
}

echo "<br/>";
echo "<hr/>";


// Un TERNAIRE
// Forme contractée d'un IF / ELSE
echo ($ville === "Nantes") ? "La ville est bien Nantes" : "La ville est une autre ville";


echo "<br/>";
echo "<hr/>";

// Plusiers conditions
$pays = "";

if($pays === "Italie")
{
    echo "Le pays est Italie";
}
elseif($pays === "Bulgarie")
{
    echo "Mon pays c'est la Bulgarie";
}
elseif($pays === "Anglaterre")
{
    echo "Mon pays est l'Anglaterre";
}
else
{
    echo "Je ne connais pas ton pays";
}


echo "<br/>";
echo "<hr/>";

// SWITCH

$pays = "Brésil";

switch($pays)
{
    case "Italie":
        echo "Mon pays est l'Italie";
    break;
    case "Brésil":
        echo "Mon pays est le Brésil";
    break;
    case "Argentine":
        echo "Mon pays est l'Argentine";
    break;
    default:
        echo "Nous n'avos pas trouver votre Pays";
        break;

}

echo "<br/>";
echo "<hr/>";




?>