<?php

include '../BD/connexion_bd.php';

$object = connexion(); // on récupère l'instance de PDO renvoyée par connexion_bd()
//gestion de l'insertion dans la base de donnée
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe'])){ //si le formulaire a bien été rempli    
    
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe'])){ // les informations envoyées ne sont pas vide

        $query = 'INSERT INTO joueur(nom,prenom,sexe) VALUES(:nom,:prenom,:sexe)'; 
        $tab =  array(
            'nom' => htmlspecialchars($_POST['nom']),
            'prenom' => htmlspecialchars($_POST['prenom']),
            'sexe' => htmlspecialchars($_POST['sexe'])
        );

        $req = $object->prepare($query);
        $req->execute($tab) or die(print_r($req->errorInfo())); 
    }

    $req->closeCursor(); //on ferme le cuseur d'analyse pour éviter les erreurs sur les prochaines requêtes. 
}

header('Location: partie.php');//on redirige vers la page à propos des informations sur la partie