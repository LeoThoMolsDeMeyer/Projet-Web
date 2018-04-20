<div class="container text-center">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-6 rounded img-register" src="<?php echo VIEWS_PATH;?>images/LogoSkyWalkers.jpg" alt="" width="72" height="72">
      </div>
      <div class="row">
        <div class="col-md-8 offset-2 order-md-1">
          <h4 class="mb-3">Mon Compte</h4>
          <form class="needs-validation" action="index.php?action=profile2" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Prénom</label>
                <p type="text" class="form-control" id="firstName" placeholder="" value="firstName" required> <?php echo $data->first_name; ?></p>
                <div class="invalid-feedback">
                  Un prénom valide est requis.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Nom</label>
                <p type="text" class="form-control" id="lastName" placeholder="" value="" required><?php echo $data->last_name; ?></p>
                <div class="invalid-feedback">
                  Un nom de famille valide est requis.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <p type="email" class="form-control" id="email" placeholder=""><?php echo $data->mail; ?></p>
              <div class="invalid-feedback">
                S'il vous plait entrer une email valide.
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="password">Mot de Passe</label>
                <p type="text" class="form-control" id="password" placeholder="" value="" required><?php echo $data->password; ?></p>
              </div>
              <div class="col-md-6 mb-3">
                <label for="password-valid">Confirmez votre Mot de Passe</label>
                <p type="text" class="form-control" id="password-valid" placeholder="" value="" required><?php echo $data->password; ?></p>
                <div class="invalid-feedback">
                  Le mot de passe n'est pas le même.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="tel">Numéro de Téléphone</label>
              <p type="telephone" class="form-control" id="telephone" placeholder=""><?php echo $data->telephone; ?></p>
              <div class="invalid-feedback">
                S'il vous plait entrer un numéro de téléphone valide.
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="street">Rue</label>
                <p type="text" class="form-control" id="street" placeholder="" value="" required><?php echo $data->street; ?></p>
                <div class="invalid-feedback">
                  La rue est invalide.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="postal-code">Code Postale</label>
                <p type="text" class="form-control" id="postal-code" placeholder="" value="" required><?php echo $data->post_code; ?></p>
                <div class="invalid-feedback">
                  Le code postal n'est pas valide.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="number">Numéro</label>
                <p type="text" class="form-control" id="number" placeholder="" value="" required><?php echo $data->number; ?></p>
                <div class="invalid-feedback">
                  Le nuémro n'est pas valide.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Pays</label>
                <p type="text" class="form-control" id="number" placeholder="" value="" required><?php echo $data->country; ?></p>
                <div class="invalid-feedback">
                  S'il vous plait sélectionner un pays valide.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="state">Ville</label>
                <p type="text" class="form-control" id="number" placeholder="" value="" required><?php echo $data->city; ?></p>
                <div class="invalid-feedback">
                  S'il vous plait entrer une ville valide.
                </div>
              </div>
            </div>
            <input class="btn btn-primary btn-lg btn-block col-md-3 offset-9" type="submit" id="modifier" name="modifier" value="Modifier">
          </form>
        </div>
      </div>