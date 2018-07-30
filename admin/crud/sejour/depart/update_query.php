<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$places_totales = $_POST["places_totales"];


updateDepart($id, $date_depart, $prix, $places_totales);

header("Location: index.php");

