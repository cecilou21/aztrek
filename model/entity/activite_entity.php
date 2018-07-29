<?php

function insertActivite(string $libelle): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO activite (libelle) VALUES (:libelle)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateActivite(int $id,string $libelle) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE activite SET libelle = :libelle WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->execute();
    
    
}


