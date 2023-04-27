<?php
require_once __DIR__ . '/../helpers/dd.php';
require __DIR__ . '/data.php';



// var_dump($subjects);

$xml =  simplexml_load_file($subjects['Sécurité']);

$subjectsItems = $xml->channel->item;
foreach ($subjectsItems as $subjectsItem) {
    echo $subjectsItem->title;
}

// d($xml->channel);

// démo thierry comment naviguer dans un xml

// objet = propriée=tés - > crochet + nom de clé
//  par ex : var_dump($xml->channel)

