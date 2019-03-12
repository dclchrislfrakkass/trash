<?php
try {
$db = new PDO('mysql:host=192.168.1.20;dbname=dcl.dartagnan;charset=utf8', 'dcl.dartagnan', 'dcl.dartagnan');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   //M'affiche les erreurs avec catch (PDO Execption)
}
catch (PDOExecption $e) {
    echo 'La base de donnée n\'est pas dispo';
}

$sql = 'SELECT * FROM Cas Where NumEtude = 2012';
try {
$req = $db->query($sql);
while($d = $req->fetch(PDO::FETCH_ASSOC)){   //uniquement l'associé
    // while($d = $req->fetch(PDO::FETCH_OBJ)){    //uniquement l'objet
// while($d = $req->fetch()){
    echo '<pre>';
    // echo $d->NomEtude;       //uniquement le NomEtude
    print_r($d);
    echo '</pre>';
}
}
catch (PDOExecption $e) {
    echo 'requete plantée';
}

////test de 
$db->beginTransaction();
$db->exec('UPDATE comments SET pseudo="test"');



$db->rollBack();
$db->commit();










/*

//////////////////////////////////////////////////////////////////////
//LES INSERTIONS

//en boucle

$req = $db->prepare('INSERT INTO comments (id,pseudo,comment) VALUE (:id , :pseudo , :comment )');

$d = array(array(
    'id' => '4',
    'pseudo'=> 'Chris',
    'comment' => 'Je test encore +1 l\'envoi de données dans la base de données'
),array(
    'id' => '5',
    'pseudo'=> 'srihc',
    'comment' => 'Je test encore +2 l\'envoi de données dans la base de données'

)
);

foreach ($d as $v){
    $req->execute($v);
}


///////////////////////////////////////////////////////////
//stockage par array 
/*
$req->execute($d);
$d = array(
    'id' => '3',
    'pseudo'=> 'Chris',
    'comment' => 'Je test encore l\'envoi de données dans la base de données'
);

$req = $db->prepare('INSERT INTO comments (id,pseudo,comment) VALUE (:id , :pseudo , :comment )');
$req->execute($d);
//////////////////////////////////////////////////////////
/*
$sql = 'UPDATE comments SET pseudo="chien"';
$res = $db->exec($sql);
echo $res.' lignes affectées';






?>