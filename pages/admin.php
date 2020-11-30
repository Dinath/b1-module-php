<h1>Administration</h1>

<?php
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';

$contacts = [];

$databaseConnection = new PDO($dsn, $user, $password);

/**
 * L'utilisateur demande la suppression de l'id dans $_POST['delete-contact']
 */
if (array_key_exists('delete-contact', $_POST)) {

    $idToDelete = $_POST['delete-contact'];

    if (!empty($idToDelete)) {
        $statement = $databaseConnection->prepare("DELETE FROM epsi.contact WHERE id=$idToDelete;");
        $statement->execute();
    }
}

/**
 * On récupère les demandes de puis la page formulaire.
 */
try {
    $statement = $databaseConnection->prepare("SELECT * FROM epsi.contact");
    $statement->execute();

    $contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>

<h2>Mes données</h2>

<?php if (empty( $contacts ) === false): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Naissance</th>
            <th scope="col">Message</th>
            <th scope="col"></th>
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
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="delete-contact" value="<?php echo $contact['id']; ?>">
                        <button type="submit" class="btn btn-primary">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>
        Aucune donnée enregistrée.
    </p>
<?php endif; ?>

