

<h1>Administration</h1>

<style>
    td > div {
        display: flex;
        column-gap: 1rem;
        align-items: center;
        justify-content: center;
    }

    div > form {
        margin: 0;
    }
    div > form input {
        margin: 0;
    }
</style>

<?php
/**
 * Connexion à la base de données.
 */
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);

//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>

<?php
/**
 * Vérifier que l'utilisateur a posté un formulaire de suppression
 *
 * @param id de du contact à supprimer
 */
if (array_key_exists('delete', $_POST)) {
    $contactId = $_POST['delete'];
    $statement = $dbh->prepare("DELETE FROM `epsi`.`contact` WHERE id = $contactId;");
    $statement->execute();
}

/**
 * Vérifier que l'utilisateur a changé son opinion sur la newseltter
 *
 * @param id du contact à modifier
 * @param newsletter la nouvelle valeur choisie
 */
if (array_key_exists('update-newsletter', $_POST) &&
    array_key_exists('update', $_POST)) {

    $contactId = $_POST['update'];
    $contactNewsletter = $_POST['update-newsletter'];

    $statement = $dbh->prepare("UPDATE `epsi`.`contact` SET newsletter = $contactNewsletter WHERE id = $contactId;");
    $statement->execute();
}
?>

<?php
/**
 * Récupération des utilisateurs
 */
$statement = $dbh->prepare('SELECT * FROM `epsi`.`contact`;');
$statement->execute(); // execute le SQL dans la base de données (MySQL / MariaDB)

$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (!empty($contacts)): ?>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Naissance</th>
            <th>Message</th>
            <th>Newsletter</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td style="font-weight: bold;"><?php echo $contact['id']; ?></td>
                <td><?php echo $contact['firstname']; ?></td>
                <td><?php echo $contact['lastname']; ?></td>
                <td><?php echo $contact['email']; ?></td>
                <td><?php echo $contact['birthdate']; ?></td>
                <td><?php echo $contact['message']; ?></td>
                <td style="text-align: center;"><?php echo ($contact['newsletter'] ? '✅' : '🔴'); ?></td>
                <td>
                    <div>
                        <form action="" method="post">
                            <input type="hidden" name="update"
                                   value="<?php echo $contact['id']; ?>">
                            <input type="hidden" name="update-newsletter"
                                   value="<?php echo ($contact['newsletter'] === '1' ? '0' : '1'); ?>">
                            <input class="button button-clear" type="submit" value="✉">
                        </form>
                        <form action="" method="post">
                            <input type="hidden" name="delete"
                                    value="<?php echo $contact['id']; ?>">
                            <input class="button button-clear" type="submit" value="X">
                        </form>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<pre>
<?php print_r($contacts); ?>
</pre>
