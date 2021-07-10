 <!-- User CLASS -->
<?php

class User
{
    protected $login;
    protected $name;
    protected $pass;
    protected $mail;
    protected $avatar;
    protected $city;
//CONSTRUCTOR 
public function __construct(string $login="", string $pass="", string $name="",string $mail="", string $avatar="",string $city=""){
    $this->login=$login;
    $this->name=$name;
    $this->mail=$mail;
    $this->avatar=$avatar;
    $this->pass=$pass;
    $this->city=$city;
    
}
//GETTERS SETTERS 
public function getLogin()
    {
    return $this->login;
    }
public function setLogin($login)
{
    $this->login = $login;
}
public function getName()
{
    return $this->name;
}
public function setName($name)
{
    $this->name = $name;
}

public function getPass()
{
    return $this->pass;
}

public function setPass($pass)
{
    $this->pass = $pass;
}

public function getMail()
    {
    return $this->mail;
    }
public function setMail($mail)
{
    $this->mail = $mail;
}

public function getAvatar()
    {
    return $this->avatar;
    }
public function setAvatar($avatar)
{
    $this->avatar = $avatar;
}

public function getCity()
    {
    return $this->city;
    }
public function setCity($city)
{
    $this->city = $city;
}
//DESTRUCTOR -> free obj 
public function __destruct(){
    $this->login="";
    $this->name="";
    $this->mail="";
    $this->avatar="";
    $this->pass="";
    $this->city="";
}

}
?>