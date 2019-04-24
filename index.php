<?php
require_once './src/controllers/TacheController.php';
require_once './src/controllers/AdminController.php';


$page =$_GET['page'];


switch ($page){
    case 'home':

        $controller = new TacheController();
        $controller->index();
        break;

    case 'modifier':
        $controller = new TacheController();
        $controller->modifier();
        break;

        case 'ajout':
            $controller = new TacheController();
            $controller->ajout();
        break;

    case 'supprimer':

            $controller = new TacheController();
            $controller->supprimeTache($_GET['id']);
            header("Location: http://localhost:8000/p1/index.php?page=home");



        break;

    case 'Connectez-vous':
        $admin = new AdminController();
        $admin->verif_user();
    break;

    case 'Inscrivez-vous':
        $admin = new AdminController();
        $admin->ajout_user();
        break;

    case 'Deconnecter':
        $admin= new AdminController();
        $admin->logout();
        break;

    case 'recuperer':
        $controller = new TacheController();
        $controller->recupertache();

        break;



    case 'modifieract':
        $controller = new TacheController();
        $controller->modifieract();
        break;

}


