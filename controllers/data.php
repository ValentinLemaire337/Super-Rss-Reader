<?php 
 require __DIR__ . '/../config/default.php';

// tableau des feeds RSS
    $subjects = ['Tests' => 'https://www.01net.com/tests/feed/','Sécurité' => 'https://www.01net.com/actualites/securite/feed/','Football' =>'https://rmcsport.bfmtv.com/rss/football/','Actualités Jeux Vidéo' => 'https://www.jeuxactu.com/rss/ja.rss', 'Test Jeux Vidéo' =>'https://www.jeuxactu.com/rss/tests.rss'];

// tableau messages erreurs
    $error = [];


    //récupération des données cookies





    // d($userChoiceCookie);

    // d($userChoice);



    // $xml =  simplexml_load_file($subjects['Sécurité']);

    // $articles = $xml->channel->item;
    // $articleTitle = $articles->title;
    // $articleDesc = $articles->description;
    // $articleDate = $articles->pubDate;
