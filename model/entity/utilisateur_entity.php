<?php

/**
 * Retourne la liste des utilisateurs
 * @return array Liste des utilisateurs
 */
function getOneUtilisateurByEmailPassword(string $email, string $password) {
    global $connexion;
    
    $query = "SELECT * FROM utilisateur WHERE mail = :email AND password = SHA1(:password)";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    
    return $stmt->fetch();
}

function insertUtilisateur(string $nom, string $prenom, string $email, string $mot_de_passe, string $telephone): int {
    global $connexion;
    
    $query = "INSERT INTO utilisateur (nom, prenom, mail, password, telephone, admin) VALUES (:nom, :prenom, :email, :mot_de_passe, :telephone, 0)";
        
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);
    $stmt->bindParam(":telephone", $telephone);
    $stmt->execute();
    
    
    
    return $connexion->lastInsertId();
    
}

