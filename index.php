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
        </ul>
    </nav>

    <?php
    $name = "Jean";
    $firstname = "Luc";
    $age = 18;
    $hasDriverLicence = true;
    ?>

    <ul>
        <li>Nom : <?php echo $name; ?></li>
        <li>Age : <?php echo $age; ?></li>
        <li>Permis ? : <?php echo $hasDriverLicence; ?></li>
    </ul>

    <?php
    if ($age >= 18) {
        echo "Vous êtes majeur !";
    }
    if ($hasDriverLicence) {
        echo "Vous avez le permis :car:";
    }
    ?>

    <?php
    $page = $_GET['page'];

    if ($page === "a-propos") {
        include './pages/about.php';
    } elseif ($page === 'contact') {
        include './pages/contact.php';
    } else {
        include './pages/homepage.php';
    }
    ?>

</div>
</body>
</html>