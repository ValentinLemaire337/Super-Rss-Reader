<?php 

// tableau des feeds RSS
$subjects = ['Tests' => 'https://www.01net.com/tests/feed/','Sécurité' => 'https://www.01net.com/actualites/securite/feed/','Football' =>'https://rmcsport.bfmtv.com/rss/football/','Actualités Jeux Vidéo' => 'https://www.jeuxactu.com/rss/ja.rss', 'Test Jeux Vidéo' =>'https://www.jeuxactu.com/rss/tests.rss'];

// tableau messages erreurs
$error = [];

    //récupération des données cookies

    $cookieRSSSubjectOne = $_COOKIE[0] ?? '';
    $cookieRSSSubjectTwo = $_COOKIE[1]  ?? '';
    $cookieRSSSubjectThree = $_COOKIE[2]  ?? '';
    // d($_COOKIE);

    $userNbArticleInCookie = $_COOKIE['userNbArticle'];
    d($userNbArticleInCookie);

    //Traitement des flux RSS



    // $xml =  simplexml_load_file($subjects['Sécurité']);

    // $articles = $xml->channel->item;
    // $articleTitle = $articles->title;
    // $articleDesc = $articles->description;
    // $articleDate = $articles->pubDate;
