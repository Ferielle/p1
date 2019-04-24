<?php
require "/_config/config.php";
require "/src/Repository/CRUD_Tache.php";
require "/src/models/tachet.php";

/**
 * Created by PhpStorm.
 */
class TacheController
{
    public function index()
    { session_start();
        if(!isset($_SESSION['login'])){
            header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");}
        else{
        $CRUD_tch = new CRUD_Tache();
        $res = $CRUD_tch->Listertache();
        require __DIR__ . '/../views/liste_tache.php';}
    }

    public  function recupertache(){
        $CRUD_tch = new CRUD_Tache();
        $res=$CRUD_tch->RecupDonnees()  ;
        require __DIR__ . '/../views/modifie_tache.php';
    }



     public function ajout()
    { session_start();

        if(!isset($_SESSION['login'])){

            header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");}
//        var_dump(__DIR__);
//        die();
                
        if (isset($_POST['sub'])) {


            $titre = $_POST["titre"];
            $datet = $_POST["date"];
            $priot = $_POST["priot"];
            $name = $_FILES["fichier"]["name"];
            // $dst = "./assets/upload/" . $name;
            $type = $_FILES["fichier"]["type"];
            $size= $_FILES["fichier"]["size"];
            $dst = "./assets/upload/" . $name;
            if ($name != "") {
                $extension = substr($_FILES['fichier']['name'], strrpos($_FILES['fichier']['name'], '.'));

                $extension = strtolower($extension);

                if (($extension == ".jpg" || $extension == ".jpeg" || $extension == ".pdf" || $extension == ".png" || $extension == ".doc" || $extension == ".docx") && $size > 2048) {
                    // File upload code
                    
                    move_uploaded_file($_FILES["fichier"]["tmp_name"], $dst);

                    $tch = new tachet($test="",$titre, $datet, $priot, $name, $dst);
//die(var_dump($tch));
                    $CRUD_tch = new CRUD_Tache();
                    $CRUD_tch->Ajoutertache($tch);
                    header("location:http://localhost:8000/p1/index.php?page=home");
                    // echo "<script>window.alert('Record saved')</script>";
                    //header('Location : http://http://localhost/MYAPP/?page=home ');
                }

            }
            die(var_dump($name));

        }
        require __DIR__ . "/../views/ajoute_tache.php";

    }

    public function modifier()
    { session_start();
        if(!isset($_SESSION['login'])){
            header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");}
          $tch=new tachet($_POST);
          $CRUD_tch = new CRUD_Tache();
          require __DIR__ . '/../views/modifie_tache.php';
    }


    public function modifieract()
    {   session_start();
        if(!isset($_SESSION['login'])){
        header("location:http://localhost:8000/p1/index.php?page=Connectez-vous");}
        $tch=new tachet($_POST);
        $CRUD_tch = new CRUD_Tache();
        $CRUD_tch->Modifiertache($tch);
        header("Location: http://localhost:8000/p1/index.php?page=home");
    }



    public function supprimeTache($idtache)
    {
            $CRUD_tch = new CRUD_Tache();
            $CRUD_tch->Supprimertache($idtache);
            header("Location: http://localhost:8000/p1/index.php?page=home");
    }
function  etatcheck(){
    $idtache=$_GET["idtache"];
    $CRUD_tch = new CRUD_Tache();
    $CRUD_tch->etat($idtache);
}

}
