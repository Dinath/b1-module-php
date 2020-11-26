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

    <?php require './components/nav.php'; ?>
    <?php require './components/navigation.php'; ?>

    <?php
    /**
     * Affiche une portion de page, en fonction de la valeur dans l'URL.
     *
     * Vérifie si la clef "page", existe dans $_GET
     */
    if (array_key_exists('page', $_GET)) {
        $page = $_GET['page']; // exemple : contact, date, tableau
    } else {
        $page = null;
    }

    if ($page === "a-propos") {
        include './pages/about.php';
    } elseif ($page === 'contact') {
        include './pages/contact.php';
    }  elseif ($page === 'tableau') {
        include './pages/array.php';
    }  elseif ($page === 'date') {
        include './pages/date.php';
    }  elseif ($page === 'base-de-donnees') {
        include './pages/database.php';
    }  else {
        include './pages/homepage.php';
    }
    ?>

</div>
</body>
</html>