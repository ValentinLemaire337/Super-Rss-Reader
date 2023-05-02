<?php
require __DIR__ . '/../../controllers/parameters-controller.php';
require __DIR__ . '/../../controllers/data.php';
require __DIR__. '/../../config/default.php';

?>

<form method="post">
    <div class="container row">
        <div class="form-check col-md-6">
            <div>
                <?php
                $i = 0; 
                foreach ($subjects as $key => $url) {
                    echo '<div><label class="form-check-label" for="userChoice' . $i . '">' . $key .
                    '<input class="form-check-input" name="userChoice[]" type="checkbox" value="' . $key . '" id="userChoice' . $i . '">
                    </label></div>';
                    $i++;
                }
                ?>
            </div>
            <?= $error['userChoice'] ?? '' ?>
            
        </div>
    </div>
    <div>
        <div class="radio col-md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="userNbArticle" id="userNbArticle" value="1">
                <label class="form-check-label" for="userNbArticle">
                    6 articles par pages
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="userNbArticle" id="userNbArticle2" value="2">
                <label class="form-check-label" for="userNbArticle2">
                    9 articles par pages
                </label>
            </div>
            <div class="form-check col-md-6">
                <input class="form-check-input" type="radio" name="userNbArticle" id="userNbArticle3" value="3">
                <label class="form-check-label" for="userNbArticle3">
                    12 articles par pages
                </label>
            </div>
        </div>
    </div>
    <div class="valider"><button id="valider">Valider</button></div>
</div>

</form>