<?php

namespace Projet\Controllers;

class AdminController{

    // Affichage des mails de contact récupérés dans la db 
    public function showMails(){
        $mails = new \Projet\Models\ContactModel();
        $allMails = $mails->getMails();

        require 'app/Views/admin/mails.php';
    }

}