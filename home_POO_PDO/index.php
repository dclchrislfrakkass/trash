<?php
include 'pdo.php';

$selectCas = array();
//fonction arrayPush de toutes les affiches des films de la base de donnée.
$selectCas = arrayPush($selectCas, $bdd->query('SELECT NomEtude FROM Cas'));
//instantiation d'un objet affiche avec comme paramettre notre tableau créer juste avant (php/mini1.php).
$cas = new cas('2012', $selectCas);
//creation de la div contenant les affiches.
$cas->doDiv();