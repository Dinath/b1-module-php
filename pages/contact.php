<?php
error_reporting(-1);
ini_set('error_reporting', E_ALL);
?>

<form method="post" action="" class="mb-3">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Nom</label>
            <input type="text" class="form-control" id="inputName" placeholder="Nom de famille" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputFirstname">Prénom</label>
            <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom" name="firstname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="birthdate">
    </div>

    <div class="form-group">
        <label for="inputMessage">Votre message</label>
        <textarea class="form-control" id="inputMessage" rows="3" name="message"></textarea>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="inputNewsletter" name="newsletter">
            <label class="form-check-label" for="inputNewsletter">
                Newsletter
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
</form>


<?php

$CHECKING_ERRORS = [
    // clef = name HTML, valeur phrase affichée à l'internaute
    'name' => 'Nom de famille',
    'firstname' => 'Prénom',
    'birthdate' => 'Date de naissance',
    'message' => 'Message',
//    'newsletter' => 'Newsletter' // pourquoi ce champ est commenté ?
];

// 1 : On vérifie que l'utilisateur a bien entré tous les champs
foreach ($CHECKING_ERRORS as $key => $value) {
    /**
     * Si ma clef (eg: name, firstname), elle existe pas dans le tableau $_POST
     * OU ||
     * Est vide $_POST[clef] (eg: $_POST['name'])
     */
    if (! array_key_exists($key, $_POST) || empty($_POST[$key])) {
        echo '<div class="alert alert-danger" role="alert">Vous devez remplir le champ : ' . $value . '</div>';
        exit;
    }
}

// 2 : On récupère les données du formulaire
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$dateOfBirth = $_POST['birthdate'];
$message = $_POST['message'];

// 3 : On se reconnecte à la base de données
$dsn = 'mysql:host=mysql;dbname=epsi';
$user = 'root';
$password = 'root';

$success = false;

try {
    $dbh = new PDO($dsn, $user, $password);

    // 4 : Insertion dans la base de données
    $stmt = $dbh->prepare(
        "INSERT INTO `contact`
            (name, firstname, birthdate, message) VALUES (
            '$name', '$firstname', '$dateOfBirth', '$message'
        );"
    );

    // envoie le SQL en base de données
    // renvoie true si ok en base
    // renvoie false si erreur
    $success = $stmt->execute();
} catch (Exception $e) {
    print_r($e);
}

// 5 : Afficher succès ou non suivant l'envoi du formulaire en base de données
if ($success): ?>
    <div class="alert alert-primary" role="alert">
        C'est dans la boîte !
    </div>
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        Quelque chose n'a pas marché !
    </div>
<?php endif; ?>
