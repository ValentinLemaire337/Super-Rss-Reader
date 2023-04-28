<?php
    require_once __DIR__ . '/../helpers/dd.php';
    require __DIR__ . '/../config/default.php';
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

        $userChoice = filter_input(INPUT_POST, 'userChoice', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        // d($userChoice);
        $userChoiceReverse = array_flip($userChoice);
        // dd($userChoiceReverse);
        if(!array_intersect_key($userChoiceReverse, $subjects)){
            $error['userChoice'] = 'Veuillez sélectionner au moins un flux RSS';
            dd(array_intersect_key($userChoice, $subjects));
        }else{
            setcookie('userChoice', json_encode($userChoice),time()+60*60*24*3, '/' );
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















    // astuces cookie : y accèder tout de suite avant d'avoir envoyer la page au client
    // alimenter artificiellement la supoerglobale

