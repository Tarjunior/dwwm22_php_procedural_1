<?php

require("models/productModel.php");

require("librairies/formatPriceToEuro.php");

require("librairies/render.php");

function home()
{
    //Aller chercher des données
    $products = findAllProducts();

    // Il envoie des données et une vue HTML
render("accueil", [ 
    "products" => $products
 ]);
}

?>