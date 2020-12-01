<form action="/" method="get" class="form-inline">
    <div class="form-group mb-2">
        Choisir la page de navigation
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="next-page" class="sr-only">Ma page</label>
        <select name="page" class="form-control" id="next-page" required>
            <option value=""></option>
            <option value="accueil">Accueil</option>
            <option value="a-propos">À propos</option>
            <option value="contact">Contact</option>
            <option value="tableau">Tableau</option>
            <option value="admin">Admin.</option>
            <option value="session">Session</option>
        </select>
<!--        <label for="next-page" class="sr-only">Ma page</label>-->
<!--        <input type="text" name="page" id="next-page"  class="form-control" placeholder="Ma page" required>-->
    </div>
    <button type="submit" class="btn btn-primary mb-2">Changer de page</button>
</form>
