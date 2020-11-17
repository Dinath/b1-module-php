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
            <li><a href="/?page=about">À propos</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Page de test</h1>

    <?php
    $name = "alderson";
    $firstname = "elliot";
    $has_driver_licence = true;
    $hasDriverLicence = true;
    $hasCar = false;
    $pi = 3.14;
    $age = 1;

    function isAdult(int $age): bool
    {
        if ($age >= 18) {
            return true;
        }

        return false;
    }

    /**
     * Display majority.
     *
     * Commentaire inutile !
     */
    function displayMajority(): void {

        $age = '18';

        $isAdult = isAdult($age);

        if ($isAdult) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous n'êtes PAS majeur";
        }
    }

    function formatFullName(string $name, string $firstname, bool $isFemale): string
    {
        if ($isFemale) {
            return "Mme $firstname " . strtoupper($name);
        } else {
            return "Mr $firstname " . strtoupper($name);
        }
    }

    ?>

    <!--    HTML dans du PHP-->
    <h2><?php echo formatFullName($name, $firstname, false); ?></h2>

    <div>
        <?php displayMajority(); ?>

        <?php
        /**
         * Inclût les pages en fonction de l'URL.
         */
        if (array_key_exists('page', $_GET)) {
            if ($_GET['page'] === "contact") {
                require './pages/contact.php';
            } elseif ($_GET['page'] === "about") {
                require './pages/about.php';
            } else {
                require './pages/homepage.php';
            }
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
