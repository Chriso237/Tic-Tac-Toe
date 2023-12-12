<?php

function connexion() {
    try {
        $bdd = new PDO('mysql:host=Localhost;dbname=tictactoe','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }catch( Exception $e){
        die('Erreur:' . $e->getMessage());
    }

    return $bdd;
};
