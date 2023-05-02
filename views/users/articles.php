<?php 

require __DIR__ . '/../../config/default.php';
// require __DIR__ . '/../../controllers/pages-controller.php';


$dateInFrench = setlocale(LC_TIME, 'fra.UTF-8');
date_default_timezone_set('Europe/Paris');
$dateCard = date('l j F Y');




?>

<div>
    <div class="container">
        <div>
            <?php  
            echo '
            <div class="card">
                    <div class="card-body">
                        <h6>'. $articleDate .'</h6>
                        <h5 class="card-title">'. $articleTitle. '</h5>
                        <p class="card-text img-card">'. $articleDesc .'</p>
                        <a href="'. $articleLink .'" class="btn">+</a>
            foreach ($articles as $value){
                echo '
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h6>'. $articleDate .'</h6>
                                <h5 class="card-title">'. $articleTitle. '</h5>
                                <p class="card-text">'. $articleDesc .'</p>
                                <a href="'. $articleLink .'" class="btn">Accèder à l\'article complet</a>
                            </div>
                    </div>
                    ';
            }
            
            ?>
        </div>
</div>

