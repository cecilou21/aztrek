<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$libelle = $_POST["libelle"];

insertActivite($libelle);

header("Location: index.php");
