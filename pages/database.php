<h1>Base de données</h1>

<ul>
    <?php
    /* Connexion à une base MySQL avec l'invocation de pilote */
    $dsn = 'mysql:host=mysql';
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "<li>Connexion ok 🎉</li>";
    } catch (PDOException $e) {
        echo '<li>Connexion échouée : ' . $e->getMessage() . '</li>';
    }

    if (isset($dbh)) {
        $dbh->exec('DROP DATABASE IF EXISTS epsi;');
        echo '<li>Suppression de la base 🔴</li>';
    }

    if (isset($dbh)) {
        $dbh->exec('CREATE DATABASE epsi;');
        echo '<li>Base de données créées ✅</li>';
    }

    if (isset($dbh)) {
        $dbh->exec('CREATE TABLE `epsi`.`contact` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `firstname` VARCHAR(45) NOT NULL,
          `lastname` VARCHAR(45) NOT NULL,
          `email` VARCHAR(45) NOT NULL,
          `message` TEXT NOT NULL,
          `birthdate` DATE NOT NULL,
          `newsletter` TINYINT NULL,
          PRIMARY KEY (`id`));
        ');
        echo '<li>Table contact créée 🗃</li>';
    }


    ?>
</ul>