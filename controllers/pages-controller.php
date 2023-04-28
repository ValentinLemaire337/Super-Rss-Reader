<?php

require_once __DIR__ . '/..//config/default.php';
require_once __DIR__ . '/../helpers/dd.php';

// afficher la liste des article

if(isset($userCookie)){

    // dd($userCookie);

    if($userCookie[0] == 'Tests'){
        $xml = simplexml_load_file('https://www.01net.com/tests/feed/');
        $articleTitle1 = $xml->channel->item->title;
        $articleDesc1 = $xml->channel->item->description;
        $articleDate1 = $xml->channel->item->pubDate;
        $articleLink1 = $xml->channel->item->link;
    }else if($userCookie[0] == 'Sécurité'){
        $xml = simplexml_load_file('https://www.01net.com/actualites/securite/feed/');
        $articleTitle1 = $xml->channel->item->title;
        $articleDesc1 = $xml->channel->item->description;
        $articleDate1 = $xml->channel->item->pubDate;
        $articleLink1 = $xml->channel->item->link;
    }else if($userCookie[0] == 'Football'){
        $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/football/');
        $articleTitle1 = $xml->channel->item->title;
        $articleDesc1 = $xml->channel->item->description;
        $articleDate1 = $xml->channel->item->pubDate;
        $articleLink1 = $xml->channel->item->link;
    }else if($userCookie[0] == 'Actualités Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
        $articleTitle1 = $xml->channel->item->title;
        $articleDesc1 = $xml->channel->item->description;
        $articleDate1 = $xml->channel->item->pubDate;
        $articleLink1 = $xml->channel->item->link;
    }else if($userCookie[0] == 'Test Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
        $articleTitle1 = $xml->channel->item->title;
        $articleDesc1 = $xml->channel->item->description;
        $articleDate1 = $xml->channel->item->pubDate;
        $articleLink1 = $xml->channel->item->link;
    }else{
        echo 'test';
    }

    if($userCookie[1] == 'Tests'){
        $xml = simplexml_load_file('https://www.01net.com/tests/feed/');
        $articleTitle2 = $xml->channel->item->title;
        $articleDesc2 = $xml->channel->item->description;
        $articleDate2 = $xml->channel->item->pubDate;
        $articleLink2 = $xml->channel->item->link;
    }else if($userCookie[1] == 'Sécurité'){
        $xml = simplexml_load_file('https://www.01net.com/actualites/securite/feed/');
        $articleTitle2 = $xml->channel->item->title;
        $articleDesc2 = $xml->channel->item->description;
        $articleDate2 = $xml->channel->item->pubDate;
        $articleLink2 = $xml->channel->item->link;
    }else if($userCookie[1] == 'Football'){
        $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/football/');
        $articleTitle2 = $xml->channel->item->title;
        $articleDesc2 = $xml->channel->item->description;
        $articleDate2 = $xml->channel->item->pubDate;
        $articleLink2 = $xml->channel->item->link;
    }else if($userCookie[1] == 'Actualités Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
        $articleTitle2 = $xml->channel->item->title;
        $articleDesc2 = $xml->channel->item->description;
        $articleDate2 = $xml->channel->item->pubDate;
        $articleLink2 = $xml->channel->item->link;
    }else if($userCookie[1] == 'Test Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
        $articleTitle2 = $xml->channel->item->title;
        $articleDesc2 = $xml->channel->item->description;
        $articleDate2 = $xml->channel->item->pubDate;
        $articleLink2 = $xml->channel->item->link;
    }else{
        echo 'test';
    }

    if($userCookie[2] == 'Tests'){
        $xml = simplexml_load_file('https://www.01net.com/tests/feed/');
        $articleTitle3 = $xml->channel->item->title;
        $articleDesc3 = $xml->channel->item->description;
        $articleDate3 = $xml->channel->item->pubDate;
        $articleLink3 = $xml->channel->item->link;
    }else if($userCookie[2] == 'Sécurité'){
        $xml = simplexml_load_file('https://www.01net.com/actualites/securite/feed/');
        $articleTitle3 = $xml->channel->item->title;
        $articleDesc3 = $xml->channel->item->description;
        $articleDate3 = $xml->channel->item->pubDate;
        $articleLink3 = $xml->channel->item->link;
    }else if($userCookie[2] == 'Football'){
        $xml = simplexml_load_file('https://rmcsport.bfmtv.com/rss/football/');
        $articleTitle3 = $xml->channel->item->title;
        $articleDesc3 = $xml->channel->item->description;
        $articleDate3 = $xml->channel->item->pubDate;
        $articleLink3 = $xml->channel->item->link;
    }else if($userCookie[2] == 'Actualités Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
        $articleTitle3 = $xml->channel->item->title;
        $articleDesc3 = $xml->channel->item->description;
        $articleDate3 = $xml->channel->item->pubDate;
        $articleLink3 = $xml->channel->item->link;
    }else if($userCookie[2] == 'Test Jeux Vidéo'){
        $xml = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
        $articleTitle3 = $xml->channel->item->title;
        $articleDesc3 = $xml->channel->item->description;
        $articleDate3 = $xml->channel->item->pubDate;
        $articleLink3 = $xml->channel->item->link;
    }else{
        echo 'test';
    }

}





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