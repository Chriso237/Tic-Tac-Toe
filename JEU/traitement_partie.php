<?php

include '../BD/connexion_bd.php';

$bd = connexion();

if(isset($_POST['difficulty']) && isset($_POST['symbol'])){

    if(!empty($_POST['difficulty']) && !empty($_POST['symbol'])){
        $query = 'INSERT INTO partie(difficulte,symbole) VALUES (:difficulte,:symbole)';
        $tableau = array(
            'difficulte' => htmlspecialchars($_POST['difficulty']),
            'symbole' => htmlspecialchars($_POST['symbol'])
        );
        $req = $bd->prepare($query);
        $req->execute($tableau) or die(print_r($req->errorInfo()));
       
    }
    $req->closeCursor();
}

header('Location: tictactoe.php');  