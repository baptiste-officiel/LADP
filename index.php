<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// On va appeler la classe ControllerFront qu'on va stocker dans une variable et utiliser dans le cas où une action est réalisée sur le site 
try{
    $controllerFront = new \Projet\Controllers\ControllerFront();

    // En fonction de l'action on va appeler une méthode de la classe ControllerFront à exécuter, sinon on exécutera la méthode home()
    if (isset($_GET['action'])){
        if($_GET['action'] == 'contact'){
            $controllerFront->contactFront();
        } 
        elseif($_GET['action'] == 'contactPost'){
            $lastname = htmlspecialchars($_POST['lastname']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $content = htmlspecialchars($_POST['content']);

            if(!empty($lastname) && (!empty($firstname) && (!empty($email) && (!empty($phone) && (!empty($content)))))){
                $controllerFront->contactPost($lastname, $firstname, $email, $phone, $content);
            } elseif(!empty($lastname) && (!empty($firstname) && (!empty($email) && (!empty($content))))){
                $controllerFront->contactPostWithoutPhone($lastname, $firstname, $email, $content);
            } else{
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        // elseif($_GET['action'] == 'reparations'){
        //     $controllerFront->reparationsFront();
        // }
        elseif($_GET['action'] == 'about'){
            $controllerFront->aboutFront();
        }

        elseif($_GET['action'] == 'mentionsLegales'){
            $controllerFront->mentions();
        }

        elseif($_GET['action'] == 'rgpd'){
            $controllerFront->rgpd();
        }

        // Affichage des mails 
        if ($_GET['action'] == 'showMails'){
            $controllerFront->showMails();
        }

    } else{
        $controllerFront->home();
    }
} catch(Exception $e){
    require 'app/Views/front/error.php';
}