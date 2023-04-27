<?php
require_once __DIR__ . '/../helpers/dd.php';

$subjects = ['Actualités' => 'https://www.01net.com/actualites/feed/','Sécurité' => 'https://www.01net.com/actualites/securite/feed/','Football' =>'https://rmcsport.bfmtv.com/rss/football/','Actualités Jeux Vidéo' => 'https://www.jeuxactu.com/rss/ja.rss', 'Test Jeux Vidéo' =>'https://www.jeuxactu.com/rss/tests.rss'];

// var_dump($subjects);

$xml =  simplexml_load_file($subjects['Actualités']);

dd($xml);

// démo thierry comment naviguer dans un xml

// objet = propriée=tés - > crochet + nom de clé
//  par ex : var_dump($xml->channel)