<?php



//fonction qui va chercher les infos d'un cas en fonction d'un mot clé de l'étude.
class Cas($cle, $bdd)
{

//requete qui va chercher les infos principales d'un cas et les attributs aux variables correspondante.
$myquery = $bdd->query('SELECT * FROM Cas WHERE NomEtude LIKE "'.$Cle.'"');

$myquery = $myquery->fetch();
$NumEtude = $myquery['NumEtude'];
$NomEtude = $myquery['NomEtude'];
$Latitude = $myquery['Latitude'];
$Longitude = $myquery['Longitude'];
$DateObservationEtude = $myquery['DateObservationEtude'];
$ResumeWeb = $myquery['ResumeWeb'];
$ResuleLong = $myquery['ResuleLong'];
$NomClassification = $myquery['NomClassification'];


//creation d'un objet cas avec comme paramettre les variables requises contenant les infos du cas.
$cas = new cas($NumEtude, $NomEtude, $Latitude, $Longitude, $DateObservationEtude, $ResumeWeb , $ResuleLong, $NomClassification);
return $cas;


    public function doDiv()
    {
        
      
        
    }
}
