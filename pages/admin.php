<?php

// 0. Reconnexion base de données
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password); // créer une nouvelle connexion à la base de données

$contacts = [];

/**
 * On récupère les demandes de puis la page formulaire.
 */
try {
    $statement = $dbh->prepare("SELECT * FROM epsi.contact");
    $statement->execute();

    $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>

<?php if (empty($contacts) === false): ?>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <th scope="row"><?php echo $contact['id']; ?></th>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['firstname']; ?></td>
            <td><?php echo $contact['birthdate']; ?></td>
            <td><?php echo $contact['message']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Vous n'avez aucune donnée.</p>
<?php endif; ?>
