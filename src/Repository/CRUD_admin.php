

<?php
require_once __DIR__ . '/../../_config/Connexion.php';


class CRUD_admin
{
    private $cx;

    function __construct()
    {
        $obj = new Connexion();
        $this->cx = $obj->getConnection();
    }


    public function verifier()
    {
        if (isset($_REQUEST["subb"])) {


            $login = $_REQUEST["login"];
            $password = $_REQUEST["password"];
            $sql =$this->cx->prepare(" select * from users where (login like '$login' or email like  '$login' )and password like '$password'");
             $sql->execute();


//            echo $sql->rowCount();exit;
            if($sql->rowCount()>0)
            {
                session_start();
                $user=$sql->fetch();
                $_SESSION['login']=$user['login'];
                $_SESSION['id']=$user['id'];

                header('location:http://localhost:8000/p1/index.php?page=home');
            }

        }

    }



    public function ajout_admin(admin $add)
    {
        $login = $add->getLogin();
        $password = $add->getPassword();
        $email = $add->getEmail();

        $sql = "insert into users (login,password,email) values ('$login','$password','$email')";
        $resultat = $this->cx->exec($sql);
        return ($resultat);
    }

}
?>