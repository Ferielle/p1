<?php
/**
 * Created by PhpStorm.
 * User: ALADIN-PC
 * Date: 18/01/2019
 * Time: 15:50
 */

class Connexion
{
    private $conn;

    public function __construct()
    {
        $db="mysql:host=localhost;dbname=tachee";
        $user="root";
        $pw="";
        $this->conn = new PDO($db,$user,$pw);

    }

    public function getConnection(){
        return $this->conn;
    }
}