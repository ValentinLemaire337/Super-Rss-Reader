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

        $userFeed = filter_input(INPUT_POST, 'userFeed', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        d($userFeed);
        if(!in_array($userFeed, $subjects)){
            $error['userFeed'] = 'Veuillez sélectionner au moins un flux RSS';
        }

        $userNbArticle = filter_input(INPUT_POST, 'userNbArticle', FILTER_SANITIZE_NUMBER_INT);
        if(!empty($userNbArticle)){
            if(($userNbArticle < 1)||($userNbArticle> 5)){
                $error['userNbArticle'] = 'Veuillez choisir un niveau d\'étude valide';
            }
        }
        // une fois tout validé on redirige vers les articles
    }










    // astuces cookie : y accèder tout de suite avant d'avoir envoyer la page au client
    // alimenter artificiellement la supoerglobale

