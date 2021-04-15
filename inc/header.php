<?php
    require_once('functions.php');
    setlocale(LC_TIME, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8');
    log_in();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.3.0.min.css /"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://kit.fontawesome.com/d40df77f00.js" crossorigin="anonymous"></script> 
    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>    
    
    <!-- CSS -->    
    <link rel="stylesheet" type="text/css" href="css/normalize-3.0.3.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />

    <!-- JAVASCRIPT -->    
    <script type="text/javascript" src="js/to-top.js"></script>
    
    <title>M-RockStars official Website</title>
    
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" > 
    <div class="container-fluid">
        <a class="navbar-brand px-3" href="index.php"><!--<img class="logo-dne" src="./img/dne_logo.png" alt="logo dne" />-->M-RockStars</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end navbar-text" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item mx-1">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">                
                    <a class="nav-link" href="tour.php">Tour</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="medias.php">Medias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="liens.php">Liens</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!--
<svg class="inverse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1" d="M0,224L360,288L720,64L1080,288L1440,224L1440,0L1080,0L720,0L360,0L0,0Z"></path>
</svg> -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 256">
    <path fill="#000000" fill-opacity="1" d="M 1440,96 1080,32 720,256 360,32 0,96 V 0 h 360 360 360 360 z"></path>
</svg>
    

<!-- GO TOP BUTTON -->
<div id="scrollUp" >
    <a href="#top"><img src="img/to top.png" alt="GO TOP"></a>
</div>
<!-- GO TOP BUTTON -->