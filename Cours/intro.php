<!-- COURS PHP -->

<?php 

$prenom = "Jean Jacques"; // string

// key = value

// Affiche moi la valeur que contient la variable $prenom
// echo "$prenom";

//CONCATENATION - s'effectue avec un point (.)
echo "Hello " . $prenom;

//
// echo "<br/>";
// echo "Hello $prenom";
// echo "Hello {$prenom}"; // deuxième façon d'écrire
// echo "<br/>";
// echo 'Hello $prenom'; // ça marche pas
 
// String - chaine de caractères.

// Integer - Nombre entier

echo "<br/>";

$note = 15;

echo "J'ai eu une note de {$note} sur 20.";

echo "<br/>";

// Float - Nombre décimal

$note2 = 16.5;

echo "J'ai eu une deuxième note de {$note2} sur 20.";

// CALCULER LA MOYENNE //

$moyenne = (15 + 16.5) / 2;

echo "<br/>";

echo "Ma moyenne est de {$moyenne}.";

echo "<br/>";

// EXERCICE 
// Créer 3 variables:
// La première variable -> Ville : Paris
// La deuxième variable -> Population : 2
// But est d'afficher cette phras

$ville = "Paris";

$population = 2;

echo "Il y a à {$ville} {$population } milion d'habitants.";

// Boolean

$conditionVraie = true;
$conditionFausse = false;

echo "<br/>";
echo "<br/>";
echo "<br/>";

// Array Simple (Tableau simple)

$eleves = ["Gilles","Sélim","Lionel","Célia"];

// Un tableau commence toujours à l'index [0]

echo $eleves[0];

// Pour ajouter un element à la fin du tableau

$eleves[] = "Mohammed";

echo "<br/>";
echo $eleves[4];

// Tableau associatif

$elevesClasse = [
    0 =>"Gilles",
    1 =>"Sélim",
    2 =>"Lionel",
    3 =>"Célia"
];
// $key => $value
echo "<br/>";
echo$elevesClasse[0];

$villeDeFrance = [
    "Paris" =>2000000,
    "Lyon" => 1000000,
    "Marseille" => 1500000

];

echo "<br/>";
echo$villeDeFrance["Paris"];

echo "<br/>";
echo "<hr/>";

//BOUCLE "FOREACH"

foreach($eleves as $value)
{
     echo "<pre/>"; // ça donne des espaces entre les lignes
     echo $value;
     echo "<pre/>";
}

echo "<br/>";
echo "<hr/>";


foreach($villeDeFrance as $key => $value)
{
    echo "<pre/>";
    echo "La ville de {$key} contient {$value} d'habitants.";
    echo "<pre/>";
    
}

echo "<hr/>";





?>