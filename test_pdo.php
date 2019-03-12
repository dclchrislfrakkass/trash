<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan;charset=utf8', 'dcl.dartagnan', 'dcl.dartagnan');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM Cas');

// // On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

 echo 'Numéro de l étude : '.$donnees['NumEtude'].'</br>';
 echo 'Nom de l etude : '.$donnees['NomEtude'].'</br>';



}

$reponse->closeCursor(); // Termine le traitement de la requête

?>