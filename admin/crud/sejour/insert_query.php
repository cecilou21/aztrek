<?php
require_once '../../security.php';
require_once '../../../model/database.php';

//Récupération des données du formulaire
$titre = $_POST["titre"];
$description = $_POST["description"];
$nb_jours = $_POST["nb_jours"];
$date_creation = $_POST["date_creation"];
$question = $_POST["question"];
$reponse = $_POST["reponse"];

$destination = $_POST["destination"];
$activite_id = $_POST["activite_id"];

//upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../images/Photos/" . $image);

//enregistrement de la base de données
insertSejour($titre, $image, $description, $nb_jours, $date_creation, $question, $reponse, $destination, $activite_id);

//redirection vers la liste
header("Location: index.php");
