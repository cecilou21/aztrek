<?php

function insertDepart(string $date_depart, float $prix, int $places_totales): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart (date_depart, prix, places_totales) VALUES (:date_depart, :prix, :places_totales)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":places_totales", $places_totales);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateDepart (string $date_depart, float $prix, int $places_totales) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart SET date_depart = :date_depart, prix = :prix, places_totales = :places_totales  WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":places_totales", $places_totales);
    $stmt->execute();
    
    
}

function getAllDepartBySejour(int $id): array {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT 
                depart.id,
                depart.date_depart,
                depart.prix,
                depart.places_totales
            FROM depart
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            WHERE sejour.id = :id
            ORDER BY depart.date_depart DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
    
}


