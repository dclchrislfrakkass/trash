<?php
require 'pdo.php';


try{
    $requete = $bd->query("SELECT * FROM cas WHERE NumEtude = 2012");
    $resultats = $requete->fetchAll();
}
catch(Exception $e)
{
    exit('<b>Catched exception at line '. $e->getLine() .' (code : '. $e->getCode() .') :</b> '. $e->getMessage());
}
foreach($resultats as $resultat) {
    var_dump($resultat);
    echo '<br />';
    echo '<br />';
}