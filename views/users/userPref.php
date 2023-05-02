<?php
require __DIR__ . '/../../controllers/parameters-controller.php';
require __DIR__ . '/../../controllers/data.php';
require __DIR__ . '/../../config/default.php';

?>

<button id="backToform">retour formulaire</button>
<h1>CHOISISSEZ VOS OPTIONS</h1>
<form method="post">
    <div class="container row form-check col-md-4">
        <?php
        $i = 0;
        foreach ($subjects as $key => $url) {
            echo '<div><label class="form-check-label" for="userChoice' . $i . '">' . $key .
                '<input class="form-check-input" name="userChoice[]" type="checkbox" value="' . $key . '" id="userChoice' . $i . '">
                    </label></div>';
            $i++;
        }
        ?>

        <?= $error['userChoice'] ?? '' ?>

    </div>
    </div>

    <div>
        <div class="radio">
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
<<<<<<< HEAD
            <div class="valider col-md-4"><button id="valider" onclick="location.href='/controllers/subjects_controller.php'">Valider</button></div>
=======
            <div class="valider col-md-4"><button id="valider">Valider</button></div>
>>>>>>> f973f521a7719265803174540a52dc8aaf3bf7bb
        </div>
    </div>
    </div>
</form>