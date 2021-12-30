<?php

require("models/staffModel.php");

require("librairies/render.php");

function allContact()
{

    $membres = findAllStaff();

    render("contact", [
    "membres" => $membres

    ]);
}

function oneContact(int $id)
{

    $staff = findOneStaff($id);

    render("staff",[
        "staff" => $staff

]);

}

?>