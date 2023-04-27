<?php
require_once __DIR__ . '/../helpers/dd.php';

$subjects = ['Tests' => 'https://www.01net.com/tests/feed/','Sécurité' => 'https://www.01net.com/actualites/securite/feed/','Football' =>'https://rmcsport.bfmtv.com/rss/football/','Actualités Jeux Vidéo' => 'https://www.jeuxactu.com/rss/ja.rss', 'Test Jeux Vidéo' =>'https://www.jeuxactu.com/rss/tests.rss'];

// var_dump($subjects);

$xml =  simplexml_load_file($subjects['Sécurité']);

$subjectsTitle = $xml->channel->item->title;
foreach ($subjectsTitle as $subjectTitle) {
    d($subjectTitle);
}

// d($xml->channel);

// démo thierry comment naviguer dans un xml

// objet = propriée=tés - > crochet + nom de clé
//  par ex : var_dump($xml->channel)