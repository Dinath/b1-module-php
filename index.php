<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">

    <nav class="navbar">
        <a href="/" class="navbar-brand">Accueil</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/?page=a-propos" class="nav-link">À propos</a>
            </li>
            <li class="nav-item">
                <a href="/?page=contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="/pages/array.php" class="nav-link">Tableau</a>
            </li>
        </ul>
    </nav>

    <?php
    /**
     * Démonstration de la différence entre == et ===.
     */
//    if ("2" == 2) {
//        echo '"2" == 2';
//    }
//
//    echo "<br>";
//
//    if (2 === 2) {
//        echo '2 === 2';
//    }
    ?>

    <?php
    /**
     * Accéder à une page en fonction du paramètre dans l'URL.
     */
    $page = $_GET['page'];

    if ($page === "a-propos") {
        require './pages/about.php';
    } elseif ($page === 'contact') {
        require './pages/contact.php';
    } else {
        require './pages/homepage.php';
    }
    ?>
</div>
</body>
</html>