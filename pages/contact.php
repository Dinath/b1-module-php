<?php
$firstname = "Alex";
$name = "Soyer";
$age = 27;
$newsletter = true;

$email = "dev@null.com";
$password = 'root';

$sex = "Garçon";
?>

<h1>On reste en contact !</h1>
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Prénom</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Prénom">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nom</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Nom">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Sexe</label>
            <select id="inputState" class="form-control">
                <option selected>Choisir...</option>
                <option>Garçon</option>
                <option>Fille</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputZip">Âge</label>
            <input type="number" class="form-control" id="inputZip" placeholder="18">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                La bonne vieille newsletter !
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">C'est parti</button>
</form>