<?php


// require '../app/autoloader.php'; 
// Autoloader::register(); 

// if (isset($_GET['p'])){
//     $p = $_GET['p'];

// } else {
//     $p ='home';
// }

// Initialisation objets

$db = new Database('dcl.dartagnan');

?>
<ul>

<?php foreach($db->query('SELECT * FROM cas') as $post); ?>

<li><?=$post->NomEtude; ?></li>

<?php endforeach; ?>


</ul>
<!---
// ob_start();

// if($p === 'home'){
    
//     require '../pages/home.php';

// } elseif ($p === 'single') {
    
//     require '../pages/single.php';
// }

// $content = ob_get_clean();
// require '../pages/templates/default.php';
