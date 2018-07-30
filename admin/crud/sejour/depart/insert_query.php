<?php
require_once '../../security.php';
require_once '../../../model/database.php';

//Récupération des données du formulaire
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$nb_jours = $_POST["nb_jours"];
$places_totales = $_POST["places_totales"];



//enregistrement de la base de données
insertDepart($date_depart, $prix, $places_totales);

//redirection vers la liste
header("Location: index.php");
