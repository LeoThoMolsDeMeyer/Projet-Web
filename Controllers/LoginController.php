<?php
class LoginController{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function run(){
        if (isset($_SESSION['connected'])){
			header('Location: index.php?action=home');
			die;
		}
        if (!empty($_POST['mail']) && !empty($_POST['password'])){
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $data = $this->db->getLoginInfo($mail);
            if (empty($data)){
                $msg = "email introuvable";
            }elseif($data->password == $password){
                $msg = "Bien connecté";
                $_SESSION['connected'] = $data->user_id;
                header('Location: index.php');
                die;
            }else{
                $msg = "Mauvais mot de passe";
            }
            // vérifier si l'utilisateur existe et renvoyer une erreur au cas ou le if renvoie null
        }elseif (empty($_POST['mail']) && !empty($_POST['password'])){
            $msg = "Entrez un email";
        }elseif (!empty($_POST['mail']) && empty($_POST['password'])){
            $msg = "Entrez votre mot de passe";
        }else{
            // rien n'a été entré
        }
        require_once('Views/login.php');

        // $messageDejaConnecte = "Vous etes déjà connecté";

        // # Attention de ne pas laisser la personne accéder cette page si ell est déjà connectée

        // #0 Vérifier que le bouton "se connecter" a été pressé

        // if (!empty($_POST['boutonConnectePresse'])){
        
        //     #1 Il faut vérifier si l'adresse mail et le mot de passe sont corrects

        //     if ($_POST['mot_de_passe'] == $_POST['mot_de_passe_initial']){
        //         if ($_POST['adresse_mail'] == $_POST['adresse_mail_initiale']){
        //             $_SESSION['connecte'] == true;
        //             $_SESSION['user_id'] == $_SESSION[''];
        //         }
        //     }

        //     #3 Connecter la personne

        //     #Si la personne est déjà connectée : 
        //     if (!empty($_SESSION['connecte'])){
        //         echo $messageDejaConnecte;
        //         header("Location: index.php?action=admin"); # redirection HTTP vers l'action login
		// 	    die(); 
        //     }

            
        // }
        // require_once(VIEWS_PATH.'login.php');
    }
}
?>