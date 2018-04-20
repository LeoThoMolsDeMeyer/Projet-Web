<?php

class LogoutController{

    public function run(){

        if (isset($_SESSION['connected'])){
            unset($_SESSION['connected']);
        }
        header('Location: index.php?action=home');
        die;
    }
}

?>