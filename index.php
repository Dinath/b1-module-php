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

<header>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/?page=contact">Contact</a></li>
<!--            <li><a href="/pages/contact.php">Contact (page)</a></li>-->
            <li><a href="/?page=about">À propos</a></li>
            <li><a href="/?page=array">Tableaux</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div>
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
    </div>
</div>

<footer>
    <br>
    <?php echo "<br>"; ?>
</footer>

</body>
</html>
