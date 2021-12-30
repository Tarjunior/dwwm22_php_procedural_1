
<?php

function findAllStaff()
{

$membres = [];

$membre1 = [
    "id" => 1,
"poste" =>"developpeur",
"nomComplet" =>"Jean Petit",
"telephone" =>"0602212416",
"imagePath" =>"https://media.istockphoto.com/photos/middle-aged-man-portrait-picture-id1285156699?b=1&k=20&m=1285156699&s=170667a&w=0&h=l8Bs_xHY2um7IUHKXj7szXvNDW5jMJmnLMuvQWO5vEo="
];

$membre2 = [
    "id" => 2,
    "poste" =>"Hacker",
    "nomComplet" =>"Jack Petit",
    "telephone" =>"0712145362",
    "imagePath" =>"https://media.istockphoto.com/photos/cheerful-fashionable-adult-man-in-city-setting-picture-id1310533180?b=1&k=20&m=1310533180&s=170667a&w=0&h=EdRuvIkrMifhyZJkHXf5Pk68ri44_g7OFnU8lIdbc-c="
];

$membre3 = [
    "id" => 3,
    "poste" =>"Designer",
    "nomComplet" =>"Michael Clark",
    "telephone" =>"0621232565",
    "imagePath" =>"https://media.istockphoto.com/photos/cheerful-fashionable-adult-man-in-city-setting-picture-id1310533180?b=1&k=20&m=1310533180&s=170667a&w=0&h=EdRuvIkrMifhyZJkHXf5Pk68ri44_g7OFnU8lIdbc-c="
];

$membres [] = $membre1;
$membres [] = $membre2;
$membres [] = $membre3;


return $membres;

}



function findOneStaff(int $id) : ?array
{
    $membres = findAllStaff();

    $membre = null;

    foreach($membres as $item)

{
    if($item["id"] === $id)
    {
    
        return $item;
    }
}

    return null;
}


?>