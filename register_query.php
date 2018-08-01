<?php

require_once '../model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$telephone = $_POST["telephone"];




insertUtilisateur($nom, $prenom, $email, $password, $telephone);

header("location: login.php");
