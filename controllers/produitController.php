<?php

require("models/productModel.php");
require("librairies/formatPriceToEuro.php");
require("librairies/render.php");

function showProduct (int $id)
{
    $product = findOneProduct($id);

    render("product", [
        "product" => $product
    ]);
}

?>