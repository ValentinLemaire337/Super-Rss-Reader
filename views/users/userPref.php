<?php

require __DIR__ . '/../../controllers/parameters-controller.php';

// ici on traitera les données user concernant le type de flux rss qu'il veut et le nombre d'info a affiché
?>


<form>
    <div class="container">



        <div class="form-check col-md-6">
            <?php
            foreach ($subjects as $key => $url) {
                echo '<div><input class="form-check-input" type="checkbox" value="' . $url . '" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault" value="">' . $key . '</label></div>';
            }
            ?>
        </div>
        <div class="radio md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    6 articles par pages
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    9 articles par pages
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    12 articles par pages
                </label>
            </div>
        </div>
    </div>
</form>