
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéo YouTube - Histoire de l'Europe</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        header {
            background-color: #2C3E50;
            color: white;
            padding: 20px 0;
            width: 100%;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin: 0;
            text-transform: uppercase;
        }

        section.video {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 0 20px;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 8px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #2C3E50;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Histoire de L'Europe : </h1>
        <p>La creation des pays <p>
    </header>

    <section class="video">
        <h2>Vidéo : L'Histoire de l'Europe</h2>
        <!-- Intégration de la vidéo YouTube -->
        <iframe src="https://www.youtube.com/embed/yY9h0edVVPk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <footer>
        <p>&copy; 2025 Histoire de L'Europe. Tous droits réservés.</p>
    </footer>

</body>
</html>

<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?><!doctype html>
<html lang="fr" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Homepage : GeoWorld</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .dropdown-menu{
max-height: 400px;
overflow-y: auto;
}
  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">GeoWorld</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Langues</a>
          <a class="dropdown-item" href="Langues.php?continent=Link">Langues</a>
         

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">Continents</a>
          
          <ul class="dropdown-menu">
<li><a href="continents.php?name=Asia">Asie</a></li>
<li><a href="continents.php?name=Europe">Europe</a></li> 
<li><a href="continents.php?name=Africa">Afrique</a></li>
<li><a href="continents.php?name=North America">Amérique du Nord</a></li>
<li><a href="continents.php?name=South America">Amérique du Sud</a></li>
<li><a href="continents.php?name=Oceania">Océanie</a></li>
<li><a href="continents.php?name=Antarctica">Antartic</a></li>
</ul>


<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">Carte du monde</a>
             <ul class="dropdown-menu">
<li><a href="carteAsie.php?name=Asia"> Carte de L'Asie</a><li>
<li><a href="carteEurope.php?name=Europe">Europe</a></li> 
<li><a href="carteAfrique.php?name=Africa">Afrique</a></li>
<li><a href="carteAmerique_Nord.php?name=North America">Amérique du Nord</a></li>
<li><a href="carteAmerque_Sud.php?name=South America">Amérique du Sud</a></li>
<li><a href="carteOceanie.php?name=Oceania">Océanie</a></li>
<li><a href="carteAntartic.php?name=Antarctica">Antartic</a></li>
</ul>


<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">Histoire du monde </a>
             <ul class="dropdown-menu">
<li><a href="histoireEurope.php?name=Europe">Europe</a></li> 
