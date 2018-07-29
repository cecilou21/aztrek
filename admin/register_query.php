<?php

require_once '../model/database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];
$telephone = $_POST["telephone"];


insertUtilisateur($nom, $prenom, $email, $password, $telephone);

header("location: login.php");
