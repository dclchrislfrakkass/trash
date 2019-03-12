<?php

class Voiture{

    public $marque;
    public $nbRoues;

        function showMarque(){
            echo "</br>marque: ".$this->marque;
        }

        static function test(){
            echo "test";
        }


}


//////////test1
/*
$v = new Voiture();
$v->marque ="Peugeot";
echo $v->marque ;


$v2 = new Voiture();
$v2->marque ="Hyundai";
echo $v2->marque ;
*/

voiture::test();

/////////test 2
$v= new Voiture();
$v->marque ="Renault";

$v->showMarque();