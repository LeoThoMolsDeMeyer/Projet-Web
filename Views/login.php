<form class="form-signin text-center col-12 col-md-4 offset-md-4 myform" action="index.php?action=login" method="post">
  <img class="mb-4 img-login rounded" src="<?php echo VIEWS_PATH;?>images/LogoSkyWalkers.jpg">
  <h1 class="h3 mb-3 font-weight-normal">Connecte-toi</h1>
  <label for="inputEmail" class="sr-only">Adresse email</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
    Pas de compte? Inscris-toi
	<a href="index.php?action=register">ici</a>
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
</form>