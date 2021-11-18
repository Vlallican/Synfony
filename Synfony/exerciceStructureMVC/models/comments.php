<?php

require_once('database.php');


/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le modèle fait appel à la base de donner.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */

function getComment() {
    $db = initDatabse();
    $recipesStatement = $db->prepare("SELECT * FROM comments where post_id =".$_GET['id']);
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    return $recipes;
}

