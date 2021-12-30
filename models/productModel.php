<?php

function findAllProducts() : array
{

// je voudrais creer un autre tableau associatif qui aurait come $key
// Premiere key : imagePath
// Deuxièeme key : name
// Troisième key : price
// Quatrième key : id
// Indici $key => $value

// Ensuite vous push dans le tableau produits, les differents produits.


$products = [];

$product1 = [
"id" => 1,
"imagePath" => "https://images.unsplash.com/photo-1630710478039-9c680b99f800?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
"name" => "Figurine Naruto",
"price" =>2500
];

$product2 = [
"id" => 2,
"imagePath" => "https://images.unsplash.com/photo-1636678880105-7d853df3bc3b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80",
"name" => "Figurine Kakashi",
"price" =>2000
];

$product3 = [
"id" =>3,
"imagePath" => "https://images.unsplash.com/photo-1608874973277-a34ed4aba3f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80",
"name" => "Tableau Japon",
"price" =>20000
];

$products[] = $product1;
$products[] = $product2;
$products[] = $product3;

// Le but final c'est de boucler sur le tableaux products

// Inclure ce fichier dans la page d'accueil
// Puis taper dans la page
// var_dump($products);


    return $products;
}

function findOneProduct(int $id) : ?array
{
    // Je vais chercher tous mesproduits
    $products = findAllProducts();

    // J'initialise la valeur de ma variable $product
    $product = null;

    // Je boucle sur mon tableau de produits
    // Afin de trouver celui qui q bien l'id que j'ai
    // reçu en parametre
    foreach($products as $item)
    {
        // Si je le trouve je renvoie null
        if($item["id"] === $id)
        {
        
            return $item;
        }
    }

    // Si j'ai rien trouvé je renvoie null
    return null;
}


?>
