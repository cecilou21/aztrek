<?php
function getAllDestinations(int $limit = 999): array {
    global $connexion;
    $query = "SELECT 
                destination.libelle,  
                destination.description,  
                destination.image,  
            FROM destination;";
            
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
    return $stmt->fetchAll();
}

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

function updateDestination(int $id,string $libelle, string $image, string $description) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE destination SET libelle = :libelle, image = :image, description = :description WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
    
    
}



