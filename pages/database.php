<h1 class="h1">Connexion à la base de données</h1>

<ul>
    <?php
    $dsn = 'mysql:host=mysql';
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
        echo "<li>Connexion autorisée 🎉</li>";

        $dbh->exec('DROP DATABASE IF EXISTS EPSI;');
        echo "<li>Suppression de la base de données</li>";

        $dbh->exec('CREATE DATABASE EPSI;');
        echo "<li>Base de données créée</li>";

        $dbh->exec('CREATE TABLE `EPSI`.`contact` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(45) NOT NULL,
          `firstname` VARCHAR(45) NOT NULL,
          `birthdate` DATE NOT NULL,
          `message` TEXT NOT NULL,
          `newsletter` TINYINT NULL,
          PRIMARY KEY (`id`)
        );');
        echo "<li>Structure `contact` créée</li>";

    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    ?>
</ul>

