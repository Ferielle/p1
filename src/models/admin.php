<?php
class admin{
    private $login;
    private $password;
    private $email;


    function __construct($login,$password,$email){
        $this->login = addslashes($login);
        $this->password = ($password);
        $this->email = ($email);

    }
    public function getPassword()
    { return $this->password ;}

    public function setPassword($password)
    { $this->password = $password ;}

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}

?>