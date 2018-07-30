<?php
require_once '../../../security.php';
require_once '../../../../model/database.php';

//Récupération des données du formulaire
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$places_totales = $_POST["places_totales"];
$sejour_id = $_POST["sejour_id"];



//enregistrement de la base de données
insertDepart($date_depart, $prix, $places_totales, $sejour_id);

//redirection vers la liste
header("Location: ../update_form.php?id=".$sejour_id);
