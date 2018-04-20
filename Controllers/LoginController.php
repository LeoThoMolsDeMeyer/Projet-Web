<?php
class LoginController{
    public function __construct(){

    }

    public function run(){

        $messageDejaConnecte = "Vous etes déjà connecté";

        # Attention de ne pas laisser la personne accéder cette page si ell est déjà connectée

        #0 Vérifier que le bouton "se connecter" a été pressé

        if (!empty($_POST['boutonConnectePresse'])){
        
            #1 Il faut vérifier si l'adresse mail et le mot de passe sont corrects

            if ($_POST['motDePasse'] == $_POST['motDePasseInitial']){
                if ($_POST['adresseMail'] == $_POST['adresseMailInitiale']){
                    $_SESSION['connecte'] == true;
                    $_SESSION['user_id'] == $_SESSION[''];
                }
            }

            #3 Connecter la personne

            #Si la personne est déjà connectée : 
            if (!empty($_SESSION['connecte'])){
                echo $messageDejaConnecte;
                header("Location: index.php?action=admin"); # redirection HTTP vers l'action login
			    die(); 
            }

            
        }
        require_once(VIEWS_PATH.'login.php');
    }
}
?>