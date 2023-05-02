<?php 

require __DIR__ . '/../../config/default.php';
// require __DIR__ . '/../../controllers/pages-controller.php';


$dateInFrench = setlocale(LC_TIME, 'fra.UTF-8');
date_default_timezone_set('Europe/Paris');
$dateCard = date('l j F Y');

?>


    <div class="container">
        <div>
            <?php  
            foreach ($articles as $article){
                echo '
                    <div class="card" >
                            <div class="card-body">
                                <h6>'. $article->pubDate .'</h6>
                                <h5 class="card-title">'. $article->title. '</h5>
                                <p class="card-text img-card">'. $article->description .'</p>
                                <a href="'. $article->link .'" class="btn">Accèder à l\'article complet</a>
                            </div>
                    </div>
                    ';
            }
            
            ?>
        </div>
</div>

