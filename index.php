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

<main class="container">
    <?php
    require './components/navbar.php';
    require './components/navigation.php';
    ?>

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
     *
     * On vérifie que la page existe.
     *
     * http://localhost/?page=contact
     * http://localhost
     */
    if (array_key_exists('page', $_GET)) {
        $page = $_GET['page'];
    } else {
        $page = null;
    }

    /**
     * Liste de pages.
     */
    $pages = [
        'a-propos',
        'contact',
        'accueil',
        'tableau',
        'base-de-donnees',
        'admin'
    ];

    /**
     * Si le paramètre "page" n'existe pas
     */
    if (! $page) {
        echo "<div class=\"alert alert-warning\" role=\"alert\">Vous n'avez choisi aucune page :)</div>";
    }
    /**
     * Si le paramètre "page" existe, on vérifie qu'il se trouve dans le tableau des pages.
     */
    elseif (in_array($page, $pages)) {
        echo "<div class=\"alert alert-primary\" role=\"alert\">Cette page existe, la voici !</div>";
        if ($page === "a-propos") {
            require './pages/about.php';
        } elseif ($page === 'contact') {
            require './pages/contact.php';
        } elseif ($page === 'accueil' ) {
            require './pages/homepage.php';
        } elseif ($page === 'tableau' ) {
            require './pages/array.php';
        } elseif ($page === 'base-de-donnees' ) {
            require './pages/database.php';
        } elseif ($page === 'admin' ) {
            require './pages/admin.php';
        }
    }
    /**
     * Si la valeur du paramètre page n'existe pas, on affiche une alerte.
     */
    else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">Attention, cette page n'existe pas.</div>";
    }
    ?>
</main>
</body>
</html>
