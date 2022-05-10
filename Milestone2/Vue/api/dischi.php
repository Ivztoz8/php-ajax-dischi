<?php
require __DIR__ . '/../database/database.php';

$dischiFiltrati = [];

if( !empty($_GET['genere'])){
    foreach($database as $element){
        if ($element['genre'] == $_GET['genere'])
        {
            $dischiFiltrati[] = $element;
        }
    }
} else {
    $dischiFiltrati = $database;
}

header("Content-type: application/json");
echo json_encode($dischiFiltrati);

?>