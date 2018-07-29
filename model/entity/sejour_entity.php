<?php
/**
 * Retourne la liste des projets
 * @return array Liste des projets
 */


function getAllSejours(int $limit = 999): array {
    global $connexion;
    $query = "SELECT 
                sejour.*,
                DATE_FORMAT(sejour.date_creation,'%d/%m/%Y') AS date_creation_format   
            FROM sejour
            INNER JOIN destination ON sejour.destination_id = destination.id
            ORDER BY sejour.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getSejour(int $id): array {
    global $connexion;
    $query = "SELECT 
                sejour.*,
                DATE_FORMAT(sejour.date_creation,'%d/%m/%Y') AS date_creation_format,   
            FROM sejour
            INNER JOIN destination ON sejour.destination_id = destination.id
            ORDER BY sejour.date_creation DESC
            WHERE sejour.id = :id;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

function insertSejour(string $titre, string $image, string $date_debut, string $date_fin, float $budget, string $description, int $categorie_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO projet (titre, image, date_debut, date_fin, budget, description, categorie_id) VALUES (:titre, :image, :date_debut, :date_fin, :budget, :description, :categorie_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":date_fin", $date_fin);
    $stmt->bindParam(":budget", $budget);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateProjet(int $id, string $titre, string $image, string $date_debut, string $date_fin, float $budget, string $description, int $categorie_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE projet 
        SET titre = :titre,
            image = :image,
            date_debut = :date_debut,
            date_fin = :date_fin,
            budget = :budget,
            description = :description,
            categorie_id = :categorie_id
        WHERE id = :id
        ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":date_debut", $date_debut);
    $stmt->bindParam(":date_fin", $date_fin);
    $stmt->bindParam(":budget", $budget);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":categorie_id", $categorie_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

