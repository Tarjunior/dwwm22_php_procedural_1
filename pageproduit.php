<?php

require("controllers/produitController.php");

$id = (int)$_GET["id"];

showProduct($id);

?>