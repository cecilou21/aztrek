<?php

function insertDestination(string $libelle, string $image, string $description): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO destination (libelle, description, image) VALUES (:libelle, :description, :image)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateDestination(int $id,string $libelle, string $description, string $image) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE destination SET libelle = :libelle, description = :description,  image = :image  WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    
}


