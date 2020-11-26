<form class="form-inline" action="/cours3.php" method="get">
<!--    <div class="form-group mx-sm-3 mb-2">-->
<!--        <label for="inputPage">Choisir la page : </label>-->
<!--        <input name="page" type="text" class="form-control" id="inputPage" placeholder="contact, date, tableau">-->
<!--    </div>-->
    <div class="form-group">
        <label for="selectPage">Choisir la page :</label>
        <select name="page" class="form-control" id="selectPage">
            <option value=""></option>
            <option value="a-propos">À propos</option>
            <option value="contact">Contact</option>
            <option value="date">Date</option>
            <option value="tableau">Tableau</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Go !</button>
</form>

<hr class="mb-5">