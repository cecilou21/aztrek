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
                destination.libelle AS destination
            FROM sejour
            INNER JOIN destination ON sejour.destination_id = destination.id
            WHERE sejour.id = :id;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertSejour(string $titre, string $image, string $description, int $nb_jours, string $date_creation, string $question, string $reponse, string $destination_id, string $activite_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, image, description, nb_jours, date_creation, question, reponse, destination_id, activite_id) VALUES (:titre, :image, :description, :nb_jours, :date_creation, :question, :reponse, :destination_id, :activite_id)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":nb_jours", $nb_jours);
    $stmt->bindParam(":date_creation", $date_creation);
    $stmt->bindParam(":question", $question);
    $stmt->bindParam(":reponse", $reponse);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":activite_id", $activite_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function updateSejour(int $id, string $titre, string $image, string $description, int $nb_jours, string $question, string $reponse, string $destination_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour 
        SET titre = :titre,
            image = :image,
            description = :description,
            nb_jours = :nb_jours,
            question = :question,
            reponse = :reponse,
            destination_id = :destination_id
        WHERE id = :id
        ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":nb_jours", $nb_jours);
    $stmt->bindParam(":question", $question);
    $stmt->bindParam(":reponse", $reponse);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
    
}

function getAllSejourByCategorie(int $id): array {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT 
                sejour.id,
                sejour.titre,
                sejour.image,
                sejour.description 
            FROM sejour
            INNER JOIN sejour_has_activite ON sejour.id = sejour_has_activite.sejour_id
            WHERE activite_id = :id
            GROUP BY sejour.id
            ORDER BY sejour.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
    
}

