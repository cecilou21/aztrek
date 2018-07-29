<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["libelle"];
$description = $_POST["description"];


//upload de l'image
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp, "../../../images/Photos/" . $image);

insertDestination($libelle, $description, $image);

header("Location: index.php");
