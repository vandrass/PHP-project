<!--PROCESS SING IN -->
<?php
session_start();
require_once("dbClass.php");
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);  //codig pass in "md5" codig system 
   
    $user = new User($login,$pass);      //create new obj in class user user with login and pass param 
    $db = new dbClass($user);           //create new obj in dbClass
    $db->checkUser();                   //check if user exist 
    $user->__destruct();             //constructor user 
    
    header('Location:../profile.php');      //go to "profile.php"
   

?>