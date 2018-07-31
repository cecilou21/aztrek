<?php

function insertActivite(string $libelle, string $image): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO activite (libelle, image) VALUES (:libelle, :image)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateActivite(int $id,string $libelle, string $image) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE activite SET libelle = :libelle, image = :image  WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    
    
}




