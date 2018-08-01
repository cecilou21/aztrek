<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$libelle = $_POST["libelle"];


//upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $destination = getOneEntity("destination", $id);
    $image = $destination["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    
    move_uploaded_file($tmp, "../../../uploads/" . $image);
}

$description = $_POST["description"];

updateDestination($id, $libelle, $image, $description);

header("Location: index.php");

