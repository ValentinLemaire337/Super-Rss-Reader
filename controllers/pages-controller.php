<?php

require_once __DIR__ . '/..//config/default.php';
require_once __DIR__ . '/../helpers/dd.php';
require __DIR__ . '/data.php';



// afficher la liste des articles

$subjectOfArticle = $_GET['subject'];
// dd($subjectOfArticle);
$subjectChosen = $subjects[$subjectOfArticle];
// dd($subjectChosen);

$xml =  simplexml_load_file($subjectChosen);

    $articles = $xml->channel->item;

    // dd($xml);




//récuperations//
// articles titres, liens, descriptions //






// https://www.01net.com/tests/feed/
// https://www.01net.com/actualites/securite/feed/
// https://rmcsport.bfmtv.com/rss/football/
// https://www.jeuxactu.com/rss/ja.rss
// https://www.jeuxactu.com/rss/tests.rss

        // $xml =  simplexml_load_file($subjects['Sécurité']);

    // $articles = $xml->channel->item;
    // $articleTitle = $articles->title;
    // $articleDesc = $articles->description;
    // $articleDate = $articles->pubDate;
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/users/articles.php';
    include __DIR__ . '/../views/footer.php';