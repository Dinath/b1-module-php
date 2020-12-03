<h1>Administration</h1>

<?php
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';

$contacts = [];

$dbh = new PDO($dsn, $user, $password);

/**
 * L'utilisateur souhaite s'inscrire ou se désincrire de la newsletter
 */
if (array_key_exists('newsletter', $_POST) ||
    array_key_exists('newsletter-contact', $_POST)) {

    $contactId = $_POST['newsletter-contact'];
    $newsletter = $_POST['newsletter'];

    $statement = $dbh->prepare("UPDATE epsi.contact SET newsletter = $newsletter WHERE id = $contactId");
    $statement->execute();
}


/**
 * L'utilisateur demande la suppression de l'id dans $_POST['delete-contact']
 */
if (array_key_exists('delete-contact', $_POST)) {

    $idToDelete = $_POST['delete-contact'];

    if (! empty($idToDelete)) {
        $statement = $dbh->prepare("DELETE FROM epsi.contact WHERE id=$idToDelete;");
        $statement->execute();
    }
}

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
            <th scope="col">Newsletter</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <th scope="row"><?php echo $contact['id']; ?></th>
                <td><?php echo htmlspecialchars($contact['name']); ?></td>
                <td><?php echo $contact['firstname']; ?></td>
                <td><?php echo $contact['birthdate']; ?></td>
                <td><?php echo htmlspecialchars($contact['message']); ?></td>
                <td><?php echo $contact['newsletter'] ? '✅' : '🔴'; ?></td>
<!--                <td>-->
<!--                    --><?php
//                    if ($contact['newsletter']) {
//                        echo "ok";
//                    } else {
//                        echo "ko";
//                    }
//                    ?>
<!--                </td>-->
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="newsletter-contact" value="<?php echo $contact['id']; ?>">
                        <input type="hidden" name="newsletter" value="<?php echo $contact['newsletter'] ? '0' : '1'; ?>">
                        <input type="submit" class="btn btn-primary" value="Newsletter" />
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="delete-contact" value="<?php echo $contact['id']; ?>">
                        <input type="submit" class="btn btn-primary" value="Supprimer" />
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

