<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$titre = $_POST["titre"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$budget = $_POST["budget"];
$description = $_POST["description"];
$categorie_id = $_POST["categorie_id"];

//upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $projet = getOneEntity("projet", $id);
    $image = $projet["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    
    move_uploaded_file($tmp, "../../../uploads/" . $image);
}

updateProjet($id, $titre, $image, $date_debut, $date_fin, $budget, $description, $categorie_id);

header("Location: index.php");

