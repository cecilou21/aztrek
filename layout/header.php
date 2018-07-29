<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="...">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AZTREK - L'AVENTURE SUR MESURE - Randonnée, voyages, et treks en Amérique Latine au Mexique, Guatémala, Costa Rica, Salvador
    et Honduras </title>
  <link rel="shortcut icon" href="favicon/favicon.ico">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="Home__page">

  <header>

    <div class="header-inner container">

      <a class="burger" href="#sidr-main">
        <i class="fa fa-bars" aria-hidden="true"></i>Menu
      </a>

      <div class="header-logo">
        <div class="logo">
          <a href="index.html" title="Accueil">
            <img src="images/Logos/logoPblanc.png" alt="Logo">
          </a>
        </div>
        <h1 class="site-title no-text">Aztrek</h1>
      </div>

      <?php require_once 'layout/nav.php'; ?>

    </div>

  </header>

  <main>