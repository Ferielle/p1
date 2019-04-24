<?php
require "/src/Repository/CRUD_admin.php";
require "/src/models/admin.php";


/**
 * Created by PhpStorm.
 * User: ALADIN-PC
 * Date: 27/01/2019
 * Time: 14:13
 */

class AdminController
{


public function ajout_user()
{

    if (isset($_POST['sbmit'])) {


        $login = $_POST["login"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $add = new admin($login, $password, $email);

        $CRUD_admin = new CRUD_admin();
        $CRUD_admin->ajout_admin($add);

        header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");


}
    require __DIR__ . '/../views/register.php';
    }


public function verif_user(){

    session_start();

    if(isset($_SESSION['login'])){

        header("location:http://localhost:8000/p1/index.php?page=home");}

else
{$CRUD_admin = new CRUD_admin();
    $CRUD_admin->verifier();
    require __DIR__ . '/../views/login.php';}


  }


public function  logout(){

    session_start();
      session_destroy();

    header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");



}


}
?>