<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$nb_jours = $_POST["nb_jours"];
$date_creation = $_POST["date_creation"];
$question = $_POST["question"];
$reponse = $_POST["reponse"];

$destination_id = $_POST["destination_id"];


//meme probleme que pour update form
$activite_id_id = $_POST["activite_id"];

//upload de l'image
if ($_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $image = $sejour["image"];
} else {
    $image = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    
    move_uploaded_file($tmp, "../../../uploads/" . $image);
}

updateSejour($id, $titre, $image, $description, $nb_jours, $date_creation, $question, $reponse, $destination_id, $categorie_id);

header("Location: index.php");

