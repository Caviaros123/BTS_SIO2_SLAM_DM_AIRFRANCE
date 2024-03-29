<section style="padding-left: 35%;padding-right: 35%; padding-top: 10%;">
    <div class="card" style="margin: 28px;margin-right: 0;margin-left: 0;">
        <div class="card-body" style="margin: 3px;">
            <h4 class="text-center card-title" style="margin: 28px;font-weight: bold;">Inscrivez-vous</h4>
            <form method="post" style="margin-bottom: 30px;">

                <div class="mb-3"><input class="form-control form-control-lg" type="text" name="nom" required placeholder="Nom"></div>
                <div class="mb-3"><input class="form-control form-control-lg" type="text" name="prenom" required placeholder="Prenom"></div>
                <div class="mb-3"><input class="form-control form-control-lg" type="email" name="email" required placeholder="Email"></div>
                <div class="mb-3"><input class="form-control form-control-lg" type="password" name="mdp" required placeholder="Mot de passe"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-auto col-md-6 m-auto"><button class="btn btn-danger d-block w-100" type="submit" name="Annuler" style="height: 50px;">Annuler</button></div>
                        <div class="col-md-6"><button class="btn btn-primary d-block w-100" type="submit" name="inscription" value="inscription" style="height: 50px;">Valider</button></div>
                    </div>
                </div>
            </form>
            <div class="pt-3 text-center">
                <p>Vous avez déja un compte?</p>
                <a href="index.php?page=5">Connectez-vous</a>
            </div>
        </div>
    </div>
</section>