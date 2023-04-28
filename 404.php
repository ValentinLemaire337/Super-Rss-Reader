<?php 
$error = $_SERVER['REDIRECT_STATUS'];
$error_title = '';
$error_message = '';

if($error == 404){
    $error_title = '404 page not found';
    $error_message = 'Le document/Fichier n\'a pas été trouvé sur le serveur';
}
?>
<!-- // faire une page 404 personnalisée -->

<center><h1><?= $error_title; ?></h1></center>
<center><h5><?= $error_message; ?></h5></center>
<center><iframe src="https://giphy.com/embed/VwoJkTfZAUBSU" width="332" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/89a-eightninea-VwoJkTfZAUBSU"></a></p></center>