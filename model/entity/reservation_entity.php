<?php
/**
 * Retourne la liste des participations
 * @return array Liste des participations
 */
function getAllParticipationsByProject(int $id): array {
    global $connexion;
    
    
    $query = "SELECT 
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.photo,
                participation.date_creation,
                participation.montant,
                participation.utilisateur_id
            FROM participation
            INNER JOIN utilisateur ON utilisateur.id = participation.utilisateur_id
            WHERE participation.projet_id = :id
            ORDER BY participation.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
    
}

function getAllParticipationsByUtilisateur(int $id): array {
    global $connexion;
    
    
    $query = "SELECT 
                    projet.titre,
                    projet.image,
                    participation.montant,
                    participation.date_creation,
                    participation.projet_id
            FROM participation
            INNER JOIN projet ON projet.id = participation.projet_id
            WHERE participation.utilisateur_id = :id
            ORDER BY participation.date_creation DESC;";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll();
    
}

