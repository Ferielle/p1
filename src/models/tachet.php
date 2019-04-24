<?php


class tachet {
    protected $titre,$date,$priot,$name,$dst,$iduser,$idtach;
    function __construct($idtach='',$titre='',$datet='',$priot='',$name='',$dst='',$iduser='') {

        $this->titre = $titre;
        $this->datet=$datet;
        $this->priot = $priot;
        $this->name = $name;
        $this->dst = $dst;
        $this->iduser = $iduser;
        $this->idtach = $idtach;

     }



    function  getIdtache()
    {
        return $this->idtach;
    }



    function getTitre() {
        return $this->titre;
    }

    function getPriot() {
        return $this->priot;
    }

    function getFile() {
        return $this->name;
    }

    function getDst()
    {
        return $this->dst;
    }

        function getDatet()

        {
        return $this->datet;
    }


    function setTitre($titre)
    {
        $this->titre =$titre;
    }

    function setDatet($datet) {
        $this->datet= $datet;
    }


    function setPriot($priot)
    {
        $this->priot= $priot;
    }

    function setFile($name) {
        $this->name = $name;
    }

    function setDst($dst) {
        $this->dst= $dst;
    }


}
