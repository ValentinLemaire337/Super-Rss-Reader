<?php
$dateInFrench = setlocale(LC_TIME, 'fra.UTF-8');
$dateCard = date('l j F Y');

?>

<?php 

require __DIR__ . '/../../config/default.php';
require __DIR__ . '/../../controllers/pages-controller.php';


?>

<div>
    <div class="container">
        <div>
            <?php  
            echo '
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">TITRE</h5>
                        <h6><?= $dateCard ?></h6>
                        <h6><?= $articleDate ?></h6>
                        <h5 class="card-title">'. $articleTitle. '</h5>
                        <p class="card-text">'. $articleDesc .'</p>
                        <a href="'. $articleLink .'" class="btn">+</a>
                    </div>
            </div>
            '
            ?>
        </div>
        <div>
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <img src="/public/assets/img/photo.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">TITRE</h5>
                        <h6><?= $dateCard ?></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <img src="/public/assets/img/photo.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">TITRE</h5>
                        <h6><?= $dateCard ?></h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
</div>

