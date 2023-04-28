<?php
require __DIR__ . '/../../controllers/parameters-controller.php';
require __DIR__ . '/../../controllers/data.php';

?>
<button id="backToform">retour formulaire</button>
<form method="post">
    <div class="container">

        <div class="form-check col-md-6">
            <div>
                <?php
                $i = 0;
                foreach ($subjects as $key => $url) {
                    echo '<div><input class="form-check-input" name="userFeed[]" type="checkbox" value="' . $url . '" id="userFeed' . $i . '">
                    <label class="form-check-label" for="userFeed' . $i . '">' . $key . '</label></div>';
                    $i++;
                }
                ?>
            </div>
            <?= $error['userFeed'] ?? '' ?>
        </div>
        <div class="radio md-6">
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
            <div class="form-check">
                <input class="form-check-input" type="radio" name="userNbArticle" id="userNbArticle3" value="3">
                <label class="form-check-label" for="userNbArticle3">
                    12 articles par pages
                </label>
            </div>
            <p id="errorCheckboxes"></p>
        </div>
    </div>
</form>
<div class="valider"><button id="valider">Valider</button></div>