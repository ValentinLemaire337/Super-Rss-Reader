<?php 

require __DIR__ . '/../../config/default.php';
// require __DIR__ . '/../../controllers/pages-controller.php';


$dateInFrench = setlocale(LC_TIME, 'fra.UTF-8');
date_default_timezone_set('Europe/Paris');
$dateCard = date('l j F Y');

if($userNbArticleChoice == 1){
    $articlesToShow = 6;
}else if($userNbArticleChoice == 2){
    $articlesToShow = 9;
}else if($userNbArticleChoice == 3){
    $articlesToShow = 12;
}else{
    $error['nbArticle'] = 'Veuillez choisir un nombre d\'articles à visionner.';
}

// dd($articlesToShow);
?>


    <div class="container">
        <div>
            <?php  
            $nbArticle = 1;
            foreach ($articles as $article){
                if($articlesToShow >= $nbArticle){
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
                    $nbArticle++;
                }
                
            }
            
            ?>
        </div>
</div>

