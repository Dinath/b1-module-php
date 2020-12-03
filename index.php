<?php
error_reporting(-1);

// Même chose que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Classe 1</title>
</head>
<body>

<div class="container">

    <?php require './components/nav.php'; ?>
    <?php require './components/navigation.php'; ?>

    <?php
    if (!session_id()) {
        session_start();
    }

    /**
     * Quelqu'un rentre son nom dans la session.
     */
    if (array_key_exists('firstname', $_POST)) {
        $_SESSION['firstname'] = $_POST['firstname'];
    }

    /**
     * Exemple : Les sessions fonctionnent aussi avec des tableaux.
     */
    $_SESSION['products'] = [
        ['name' => 'Chaussures', 'price' => 100],
        ['name' => 'Tee-shirts', 'price' => 100],
    ];
    ?>

    <?php if (! array_key_exists('firstname', $_SESSION)): ?>
        <form action="" method="post">
            <h1>Bienvenue,</h1>
            <p>Quel est ton prénom ?</p>
            <input type="text" placeholder="Prénom" name="firstname">
            <input type="submit" value="M'enregistrer">
        </form>
    <?php else: ?>
        <p>Ah oui, tu t'appelles <?php echo $_SESSION['firstname']; ?> du Bourg Palette !</p>
    <?php endif; ?>

    <?php
    /**
     * Affiche une portion de page, en fonction de la valeur dans l'URL.
     *
     * Vérifie si la clef "page", existe dans $_GET
     *
     * http://localhost/epsi/?page=contact
     *
     * $_GET = ['page' => 'contact'];
     * $_GET = [];
     *
     * Pour éviter les undefined index ... in array
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
    }  elseif ($page === 'admin') {
        include './pages/admin.php';
    }  elseif ($page === 'logout') {
        include './pages/logout.php';
    }   else {
        include './pages/homepage.php';
    }
    ?>

</div>
</body>
</html>