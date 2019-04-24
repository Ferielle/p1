<?php
require_once __DIR__ . '/../../_config/config.php';

class CRUD_Tache
{
    private $cx;

    function __construct()
    {
        $obj = new Connexion();
        $this->cx = $obj->getConnection();
    }

    function Ajoutertache(tachet $tch)
    {
        $titre = $tch->getTitre();
        $datet = $tch->getDatet();
        $priot = $tch->getPriot();
        $name = $tch->getFile();
        $dst = $tch->getDst();
        $iduser= $_SESSION['id'];
        $sql = "insert into tachet (titre,datet,priot,name,dst,etat,iduser) values ('$titre','$datet','$priot','$name','$dst','0','$iduser')";
        //die(var_dump($sql));
        $resultat = $this->cx->exec($sql);
        return ($resultat);
    }





    function Recuperertache($dateTache)
    {

        $sql = "select * from tachet where datet=" . $dateTache;
        $res=$this->cx->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }

    function Listertache()
    {

$iduser= $_SESSION['id'];



        $sql = "select * from tachet  where iduser='$iduser'order by datet";
        $res = $this->cx->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }

    function Supprimertache($idtache)
    {

        $sql = "delete  from tachet where idtache=" . $idtache;
        $resultat = $this->cx->exec($sql);
        return ($resultat);


    }

    function RecupDonnees($id)
    {


        $sql = "select * from tachet where idtache like'$id'";
        $resultat = $this->cx->query($sql);
        return ($resultat->fetch());
    }


    function Modifiertache(tachet $tch)
    {



        $idtache= $_POST['id'];
        $titre=$_POST['titre'];
        $datet = $_POST['date'];
        $priot = $_POST['priot'];

        $sql = "UPDATE tachet SET titre='$titre',priot='$priot',datet='$datet' WHERE idtache=" . $idtache;
                $resultat = $this->cx->exec($sql);
                return ($resultat);


    }

    function etat($idtache)
    {

        $sql = "update tablet set  etat='1' where id=".$idtache;
        $resultat = $this->cx->exec($sql);
        return ($resultat);

}
}