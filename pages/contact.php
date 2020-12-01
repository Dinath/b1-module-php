<?php
//$firstname = "Alex";
//$name = "Soyer";
//$age = 27;
//$newsletter = true;
//
//$email = "dev@null.com";
//$password = 'root';
//
//$sex = "Garçon";
?>

<h1>On reste en contact !</h1>

<pre><?php print_r($_POST); ?></pre>

<form action="/?page=contact" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Prénom</label>
            <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="Prénom" value="Alex" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nom</label>
            <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Nom" value="Soyer" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Votre message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputDate">Date de naissance</label>
            <input type="date" class="form-control" id="inputDate" value="1993-11-12" name="birthdate">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" checked name="newsletter">
            <label class="form-check-label" for="gridCheck">
                La bonne vieille newsletter !
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">C'est parti</button>
</form>

<?php
// 0. Reconnexion base de données
$dsn = 'mysql:host=mysql';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password); // créer une nouvelle connexion à la base de données

// 1. Vérifier que l'utilisateur a rentré toutes les données
$fields = ['firstname', 'name', 'birthdate', 'message', 'newsletter'];

/**
 * $field = firstname
 * $field = name
 * $field = birthdate
 * ...
 */
foreach ($fields as $field) {
    // si la clef $field n'existe pas dans $_POST OU est vide $_POST[$field]
    if (! array_key_exists($field, $_POST) || empty($_POST[$field])) {
        echo "Vous devez remplir tous les champs";
        exit(); // die();
    }
}

// 2. Récupérer les variables du formulaire
$firstname = $_POST['firstname'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$message = $_POST['message'];

// 3. Insérer les données dans la base
$stmt = $dbh->prepare("INSERT INTO `epsi`.`contact` 
        (name, firstname, birthdate, message) VALUES (
        '$name', '$firstname', '$birthdate', '$message'
    );"
);

// 4. Afficher un message à l'utilisateur en cas de problème
if ($stmt->execute() === true) {
    echo "<div class='alert alert-primary'>Merci de votre message</div>";
} else {
    echo "<div class='alert alert-danger'>Une erreur a eu lieu.</div>";
    var_dump($stmt->errorInfo());
}
?>

