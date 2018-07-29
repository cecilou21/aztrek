<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$libelle = $_POST["libelle"];

//upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $activite = getOneEntity("activite", $id);
    $image = $sejour["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    
    move_uploaded_file($tmp, "../../../images/Pictos/" . $image);
}

updateActivite($id, $libelle, $image);

header("Location: index.php");

