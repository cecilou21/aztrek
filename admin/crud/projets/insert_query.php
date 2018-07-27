<?php
require_once '../../security.php';
require_once '../../../model/database.php';

//Récupération des données du formulaire
$titre = $_POST["titre"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$budget = $_POST["budget"];
$description = $_POST["description"];
$categorie_id = $_POST["categorie_id"];

//upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image);

//enregistrement de la base de données
insertProjet($titre, $image, $date_debut, $date_fin, $budget, $description, $categorie_id);

//redirection vers la liste
header("Location: index.php");
