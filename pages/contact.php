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

<pre>
    <?php
    echo "POST:<br><br>";
    print_r($_POST);

    /**
     * On vérifie que l'utilisateur a bien envoyé les données.
     */
    if (array_key_exists('firstname', $_POST)) {
        $firstname = $_POST['firstname'];

        echo "Tu t'appelles $firstname";
    }
    ?>
</pre>

<h1>On reste en contact !</h1>
<form action="/?page=contact" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Prénom</label>
            <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="Prénom" value="Alex" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nom</label>
            <input type="text" name="lastname" class="form-control" id="inputPassword4" placeholder="Nom" value="Soyer" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="E-mail" value="alex.soyer@epsi.fr">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" value="root">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Sexe</label>
            <select id="inputState" class="form-control" name="sex">
                <option>Choisir...</option>
                <option selected>Garçon</option>
                <option>Fille</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputZip">Âge</label>
            <input type="number" name="age" class="form-control" id="inputZip" placeholder="18" value="27" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputDate">Date de naissance</label>
            <input type="date" class="form-control" id="inputDate" value="1993-11-12" name="birthdate">
        </div>
        <div class="form-group col-md-6">
            <p>Avez-vous des animaux</p>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="animal" class="custom-control-input" value="Chien">
                <label class="custom-control-label" for="customRadio1">Chien</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="animal" class="custom-control-input" value="Chat">
                <label class="custom-control-label" for="customRadio2">Chat</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="animal" class="custom-control-input" checked value="Roger">
                <label class="custom-control-label" for="customRadio3">Roger</label>
            </div>
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
