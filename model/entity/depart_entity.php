<?php

function insertDepart(string $date_depart, float $prix, int $places_totales, int $sejour_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO depart (date_depart, prix, places_totales, sejour_id) VALUES (:date_depart, :prix, :places_totales, :sejour_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":places_totales", $places_totales);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateDepart (int $id, string $date_depart, float $prix, int $places_totales) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart SET date_depart = :date_depart, prix = :prix, places_totales = :places_totales  WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":places_totales", $places_totales);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    
}

function getAllDepartBySejour(int $id): array {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT 
            depart.id,
            depart.date_depart,
            depart.prix,
            depart.places_totales,
            depart.places_totales - IFNULL(total_resa.nb_places, 0) AS places_restantes
        FROM
            depart
                INNER JOIN
            sejour ON sejour.id = depart.sejour_id
                LEFT JOIN

            ( SELECT 
                depart_id, SUM(reservation.nb_places) AS nb_places
            FROM reservation
            WHERE reservation.validation = 1
            GROUP BY reservation.depart_id ) as total_resa 

            ON total_resa.depart_id = depart.id
        WHERE
            sejour.id = :id
        ORDER BY depart.date_depart DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
    
}


