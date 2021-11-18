<?php

require_once('database.php');

/** Doit contenir les méthodes pour  traiter les postes.
 * Rappel : Le modèle fait appel à la base de données.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */
function getPosts() {
    $db = initDatabse();
    $recipesStatement = $db->prepare('SELECT * FROM posts');
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    return $recipes;
}

