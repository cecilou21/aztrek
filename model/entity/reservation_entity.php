<?php

function getAllReservations(int $limit = 999): array {
    global $connexion;
    $query = "SELECT 
                reservation.*,
                DATE_FORMAT(projet.date_debut,'%d/%m/%Y') AS date_debut_format,
                REPLACE(FORMAT(projet.budget, 'currency', 'de_DE'), '.', ' ') AS budget_format,
                
                
                IFNULL(SUM(participation.montant) , 0) AS montant_participation,
                
            FROM reservation
            INNER JOIN depart ON categorie.id = projet.categorie_id
            LEFT JOIN participation ON participation.projet_id = projet.id
            LEFT JOIN notation ON notation.projet_id = projet.id
            GROUP BY projet.id
            ORDER BY projet.date_debut DESC
            LIMIT :limit;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();
    return $stmt->fetchAll();
}


function updateReservation(string $id) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE reservation SET
               validation = NOT validation 
               WHERE id = :id";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    
}
