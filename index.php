<?php
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Classe 3</title>
</head>
<body>
<header>

    <nav class="container">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/?page=contact">Contact</a></li>
            <li><a href="/?page=about">À propos</a></li>
            <li><a href="/?page=array">Tableaux</a></li>
            <li><a href="/?page=database">Base de données</a></li>
            <li><a href="/?page=admin">Administration</a></li>
        </ul>
    </nav>
</header>

<div class="container">

    <form action="" method="get">
        <!--        <label for="inputName">La page de destination</label>-->
        <!--        <input type="text" name="page" id="inputName">-->

        <label for="inputSelect">La page de destination</label>
        <select name="page" id="inputSelect">
            <option value="contact">Contact</option>
            <option value="about">À propos</option>
            <option value="array">Tableaux</option>
            <option value="database">Base de données</option>
            <option value="admin">Administration</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>

    <h1>Index</h1>

    <?php
    /**
     * Si quelqu'un a posté son prénom dans un formulaire
     *
     * Je le sauvegarde en session
     */
    if (array_key_exists('session-firstname', $_POST)) {
        $firstname = $_POST['session-firstname'];

        $_SESSION['firstname'] = $firstname;
    }
    ?>

<!--    Sans syntaxe alternative-->
<!--    Si le prénom n'existe pas en session-->
    <?php if (! array_key_exists('firstname', $_SESSION)) { ?>
        <form action="" method="post">
            <input type="text" name="session-firstname" id="">
            <input type="submit" value="Envoyer">
        </form>
    <?php } else { ?>
        <p>Bonjour, <?php echo $_SESSION['firstname']; ?></p>
        <a href="/pages/logout.php">Se déconnecter</a>
    <?php } ?>

    <main>
        <?php
        /**
         * Inclût les pages en fonction de l'URL.
         */
        if (\array_key_exists('page', $_GET)) {

            $page = $_GET['page'];

            switch ($page) {
                case 'contact':
                    require './pages/contact.php';
                    break;
                case 'about':
                    require  './pages/about.php';
                    break;
                case 'array':
                    require  './pages/array.php';
                    break;
                case 'database':
                    require  './pages/database.php';
                    break;
                case 'admin':
                    require  './pages/admin.php';
                    break;
                default:
                    require './pages/homepage.php';
            }

//            if ($page === "contact") {
//                require './pages/contact.php';
//            } elseif ($page === "about") {
//                require './pages/about.php';
//            } elseif ($page === "array") {
//                require './pages/about.php';
//            } else {
//                require './pages/homepage.php';
//            }
        }
        ?>
    </main>
</div>

<footer>
    <br>
    <?php echo "<br>"; ?>
</footer>

</body>
</html>
