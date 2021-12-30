<?php 

require("models/staffModel.php");

require("librairies/render.php");

$membres = findAllStaff();

render("contact", [
    "membres" => $membres
]);





?>