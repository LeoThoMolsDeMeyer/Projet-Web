<div class="container text-center">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-6 rounded img-register" src="<?php echo VIEWS_PATH;?>images/LogoSkyWalkers.jpg" alt="" width="72" height="72">
      </div>
      <div class="row">
        <div class="col-md-8 offset-2 order-md-1">
          <h4 class="mb-3">Mon Compte</h4>
          <form class="needs-validation" action="index.php?action=profile" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName-m">Prénom</label>
                <input type="text" class="form-control text-center" id="firstName-m" placeholder="<?php echo $data->first_name; ?>" value="" required>
                <div class="invalid-feedback">
                  Un prénom valide est requis.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName-m">Nom</label>
                <input type="text" class="form-control text-center" id="lastName" placeholder="<?php echo $data->last_name; ?>" value="" required>
                <div class="invalid-feedback">
                  Un nom de famille valide est requis.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control text-center" id="email" placeholder="<?php echo $data->mail; ?>">
              <div class="invalid-feedback">
                S'il vous plait entrer une email valide.
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="password">Mot de Passe</label>
                <input type="text" class="form-control text-center" id="password" placeholder="<?php echo $data->password; ?>" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="password-valid">Confirmez votre Mot de Passe</label>
                <input type="text" class="form-control text-center" id="password-valid" placeholder="<?php echo $data->password; ?>" value="" required>
                <div class="invalid-feedback">
                  Le mot de passe n'est pas le même.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="tel">Numéro de Téléphone</label>
              <input type="telephone" class="form-control text-center" id="telephone" placeholder="<?php echo $data->telephone; ?>">
              <div class="invalid-feedback">
                S'il vous plait entrer un numéro de téléphone valide.
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="street">Rue</label>
                <input type="text" class="form-control text-center" id="street" placeholder="<?php echo $data->street; ?>" value="" required>
                <div class="invalid-feedback">
                  La rue est invalide.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="postal-code">Code Postale</label>
                <input type="text" class="form-control text-center" id="postal-code" placeholder="<?php echo $data->post_code; ?>" value="" required>
                <div class="invalid-feedback">
                  Le code postal n'est pas valide.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="number">Numéro</label>
                <input type="text" class="form-control text-center" id="number" placeholder="<?php echo $data->number; ?>" value="" required>
                <div class="invalid-feedback">
                  Le nuémro n'est pas valide.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Pays</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choix...</option>
                  <option>Belgique</option>
                </select>
                <div class="invalid-feedback">
                  S'il vous plait sélectionner un pays valide.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">Ville</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choix...</option>
                  <option>Bruxelles</option>
                  <option>Namur</option>
                  <option>Anvers</option>
                  <option>Gand</option>
                  <option>Liège</option>
                </select>
                <div class="invalid-feedback">
                  S'il vous plait entrer une ville valide.
                </div>
              </div>
            </div>
            <input class="btn btn-primary btn-lg btn-block col-md-3 offset-9" type="submit" id="modifier" name="modifier" value="Valider">
          </form>
        </div>
      </div>