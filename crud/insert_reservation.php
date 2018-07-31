<?php
require_once '../model/database.php';
require_once '../lib/functions.php';
$utilisateur = current_user();

$depart_id = $_POST["depart_id"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];
$nb_places = $_POST["nb_places"];



insertReservation($depart_id, $utilisateur_id, $nb_places);

header("Location: ../sejour.php?id=".$sejour_id."&reservation_envoye");
