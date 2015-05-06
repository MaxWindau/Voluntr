<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    <h2>Registreren bij Voluntr</h2><br />
    <div class="form-group">
        <a class="btn btn-sm btn-social btn-facebook"><i class="fa fa-facebook"></i>Registreren met Facebook</a>
        <a class="btn btn-sm btn-social btn-twitter"><i class="fa fa-twitter"></i>Registreren met Twitter</a> 
        <a class="btn btn-sm btn-social btn-google-plus"><i class="fa fa-google-plus"></i>Registreren met Google+</a>
    </div>
    <hr>
    <h4>Basisgegevens<br /><br /></h4>
    <form action="index.php?p=registreren2" method="GET">
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="voornaam" class="control-label">Voornaam</label>
                <input type="text" class="form-control input" id="voornaam" placeholder="Voornaam">
            </div>
            <div class="col-sm-3">
                <label for="tussenvoegsel" class="control-label">Tussenvoegsel</label>
                <input type="text" class="form-control input" id="tussenvoegsel" placeholder="Tussenvoegsel">
            </div>
            <div class="col-sm-5">
                <label for="voornaam" class="control-label">Achternaam</label>
                <input type="text" class="form-control input" id="voornaam" placeholder="Achternaam">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-7">
                <label for="email" class="control-label">E-mailadres</label>
                <input type="email" class="form-control input" id="email" placeholder="E-mailadres">
            </div>
            <div class="col-sm-5">
                <label for="geboortedatum" class="control-label">Geboortedatum</label>
                <input type="date" class="form-control input" id="geboortedatum" placeholder="dd-mm-jjjj">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="wachtwoord" class="control-label">Wachtwoord</label>
                <input type="password" class="form-control input" id="wachtwoord" placeholder="Wachtwoord">
            </div>
            <div class="col-sm-6">
                <label for="wachtwoordnogmaals" class="control-label">Wachtwoord nogmaals</label>
                <input type="password" class="form-control input" id="wachtwoordnogmaals" placeholder="Wachtwoord">
            </div>
        </div>


        <button type="submit" class="btn btn-lg btn-basis pull-right">Volgende stap <i class="fa fa-arrow-right"></i></button>
    </form>
</div>