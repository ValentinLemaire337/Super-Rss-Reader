<?php
    require_once __DIR__ . '/../helpers/dd.php';
    require __DIR__ . '/data.php';




    // test de récupération des feeds RSS
    // var_dump($subjects);

    // $xml =  simplexml_load_file($subjects['Sécurité']);

    // $subjectsItems = $xml->channel->item;
    // foreach ($subjectsItems as $subjectsItem) {
    //     echo $subjectsItem->title;
    // }

    // d($xml->channel);

    // démo thierry comment naviguer dans un xml

    // objet = propriétés - > crochet + nom de clé
    //  par ex : var_dump($xml->channel)

    // récupération, nettoyage et traitement des données reçues du formulaire : 


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $userFeed = filter_input(INPUT_POST, 'userFeed', FILTER_VALIDATE_URL, FILTER_REQUIRE_ARRAY);
        // d($userFeed);
        if(!array_intersect($userFeed, $subjects)){
            $error['userFeed'] = 'Veuillez sélectionner au moins un flux RSS';
        }

        // pour stocker un tableau dans un cookie -> json_encode
        // on doit stocké un tableau dans un tableau
        // $_COOKIE[nomCookie] = array(nomDeSujet, , ,array(URL1, URL2, URL3))
            foreach ($userFeed as $key => $url) {
                setcookie($key, $url);
            }
        

        $userNbArticle = filter_input(INPUT_POST, 'userNbArticle', FILTER_SANITIZE_NUMBER_INT);
        // d($userNbArticle);
        if(!empty($userNbArticle)){
            if(($userNbArticle < 1)||($userNbArticle> 3)){
                $error['userNbArticle'] = 'Veuillez choisir le nombre d\'articles souhaité.';
            }else{
                setcookie('userNbArticle', $userNbArticle);
            }
        }
        // une fois tout validé on redirige vers les articles

    }

    // $test = $_COOKIE[0];
    // $xmlTest = simplexml_load_file($test);
    // d($xmlTest);











    // astuces cookie : y accèder tout de suite avant d'avoir envoyer la page au client
    // alimenter artificiellement la supoerglobale

