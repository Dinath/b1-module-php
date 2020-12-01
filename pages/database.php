<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>

<!--http://localhost/pages/database.php -->

<h1>
    <?php
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:host=mysql';
    $user = 'root';
    $password = 'root';

    /**
    Utilisation sur PHPMyAdmin:
    $dsn = 'mysql:host=127.0.0.1';
    $user = 'root';
    $password = '';
     */

    try {
        $dbh = new PDO($dsn, $user, $password); // créer une nouvelle connexion à la base de données
        echo "Connexion autorisée 🎉";
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        die(); // on coupe le reste
    }
    ?>
</h1>

<?php
try {
    $dbh->exec('DROP DATABASE IF EXISTS `epsi`;');
    $dbh->exec("CREATE DATABASE `epsi`;");
    echo "<h2>Créer la base de données ✅</h2>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $dbh->exec('CREATE TABLE `epsi`.`contact` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `name` VARCHAR(45) NOT NULL,
      `firstname` VARCHAR(45) NOT NULL,
      `birthdate` DATE NOT NULL,
      `message` TEXT NOT NULL,
      PRIMARY KEY (`id`));
    ');
    echo "<h3>Créer la structure de la table ✅</h3>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>

<?php
try {
    $stmt = $dbh->prepare('INSERT INTO `epsi`.`contact` 
        (name, firstname, birthdate, message) VALUES (
        "SOYER", "Alex", "1993-01-19", "Salut, je suis Alex"
    );');
    $stmt->execute();
    echo "<h3>Insertion de valeurs dans la base ✅</h3>";
} catch (PDOException $e) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">" . $e->getMessage() . "</div>";
    die();
}
?>


