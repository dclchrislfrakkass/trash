<ul>

<?php foreach($db->query('SELECT * FROM cas') as $post); ?>

<li><?=$post->NomEtude; ?></li>

<?php endforeach; ?>


</ul>

<!--
// $db = new App\Database('dcl.dartagnan');

// $datas = $db->query('SELECT * FROM cas')
// $datas = $res->fetchAll(PDO::FETCH_OBJ);

// var_dump($datas);


// $pdo = new PDO('mysql:dbname=dcl.dartagnan;host=localhost', 'test', 'test01');


// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $res = $pdo->query('SELECT * FROM cas');

// $datas = $res->fetchAll(PDO::FETCH_OBJ);

// var_dump($datas[0]->NumEtude);

// var_dump($datas[3]->NumEtude);







// $pdo = new PDO('mysql:;host=localhost;dbname=dcl.dartagnan', 'test', 'test01');