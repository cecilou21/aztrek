<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$depart_id = $_POST["depart_id"];
$utilisateur_id = $_POST["utilisateur_id"];
$nb_places = $_POST["nb_places"];
$date_creation = $_POST["date_creation"];
$validation = $_POST["validation"];



updateReservation($id, $depart_id, $utilisateur_id, $nb_places, $date_creation, $validation);

header("Location: index.php");

