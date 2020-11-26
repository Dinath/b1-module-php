
<pre>
<?php print_r($_POST); ?>
</pre>

<form method="post" action="">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Date</label>
        <input type="date" class="form-control" id="inputAddress" name="date">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Niveau</label>
        <input type="range" class="form-control" id="inputAddress2" name="level">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Âge</label>
        <input type="number" class="form-control" id="inputAddress2" placeholder="Âge" name="age">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect2">Les fruits ?</label>
        <select class="form-control" id="exampleFormControlSelect2" name="fruits">
            <option>Oui</option>
            <option>Non</option>
        </select>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="newsletter">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" id="sexe1" value="g" checked>
        <label class="form-check-label" for="sexe1">
            Garçon
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sex" id="sexe2" value="f">
        <label class="form-check-label" for="sexe2">
            Fille
        </label>
    </div>
    <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="sex" id="sexe3" value="nb">
        <label class="form-check-label" for="sexe3">
            Non-binaire
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>