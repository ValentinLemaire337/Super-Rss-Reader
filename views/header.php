<?php

// ici on affiche la nav bar
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/styles.css">
    <title>Super RSS Reader</title>
</head>

<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/../public/assets/img/logo.png" width="24" height="24" viewBox="0 0 24 24"></a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Catégorie 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catégorie 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catégorie 3</a>
                </li>
            </ul>
            <input type="checkbox" class="toggle-button">
        </div>
    </nav>