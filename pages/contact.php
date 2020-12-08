<h1>On reste en contact !</h1>

<?php

// Ne marche que si "require'...
if (isset($name)) {
    echo $name;
}
?>

<pre>
    <?php print_r($_POST); ?>
</pre>

<form action="" method="post">
    <div class="row">
        <div class="column">
            <label for="inputFirstname">Prénom</label>
            <input type="text" id="inputFirstname" name="firstname" value="Alex">
        </div>

        <div class="column">
            <label for="inputLastname">Nom de famille</label>
            <input type="text" id="inputLastname" name="lastname" value="Soyer">
        </div>
    </div>


    <div class="row">
        <div class="column">
            <label for="inputEmail">Votre adresse e-mail</label>
            <input type="email" id="inputEmail" name="email" value="alexandre.soyer1@reseau-cd.net">
        </div>
        <div class="column">
            <label for="inputBirthdate">Date de naissance</label>
            <input type="date" id="inputBirthdate" name="birthdate" value="2020-01-01">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <label for="inputMessage">Votre message</label>
            <textarea name="message" id="inputMessage" cols="30" rows="10">Je suis un message</textarea>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <label for="inputNewsletter">Inscription newsletter</label>
            <input type="checkbox" name="newsletter" id="inputNewsletter" checked>
        </div>
    </div>

    <input type="submit" value="Envoyer">
</form>

<?php
// 0. Vérifier que les variables existent, aka tous mes champs requis
$fields = ['firstname', 'lastname', 'email', 'birthdate', 'message'];

foreach ($fields as $field) { // firstname, lastname, ...
    if (! array_key_exists($field, $_POST) || empty($_POST[$field])) {
        echo "<blockquote>Tous les champs doivent être rempli !</blockquote>";
        exit();
    }
}

// 1. Récupération des variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$message = $_POST['message'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];

// condition particulière champ non requis
if (array_key_exists('newsletter', $_POST)) {
    $newsletter = $_POST['newsletter'] === 'on';
} else {
    $newsletter = 0;
}

// 2. connexion à la base de données
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 3. Insérer des données dans la base
$sql = "INSERT INTO `epsi`.`contact` 
    (firstname, lastname, message, email, newsletter, birthdate) VALUES 
    ('$firstname', '$lastname', '$message', '$email', ':newsetter', '$birthdate')
;";

echo $sql;

$stmt = $dbh->prepare($sql);

if (!$stmt) {
    print_r($dbh->errorInfo());
}

// 4. Afficher un message à l'utilisateur
$isCreated = $stmt->execute();

if ($isCreated) {
    echo "Merci de votre message";
} else {
    echo "Déso, ça n'a pas marché !";
}
?>

