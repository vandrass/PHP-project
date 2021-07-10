 <!-- SIGN UP LOGIC -->
<?php
session_start();
require_once("dbClass.php");

   
    $login = $_POST['login'];
    $name = $_POST['name'];    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass_confirm'];
    $city = $_POST['city'];
   //password validation  
    if($pass === $pass_confirm){
        $path='uploads/'. time() . $_FILES['avatar']['name'];           //path to folder with account images  
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path)){   // function move files  
            $_SESSION['message'] = 'Image Upload error';    
            header('Location:../registration.php');  //go to "registration.php"
        }
        $pass = md5($pass);  //md5 function coddig password 

        $user = new User($login,$pass,$name, $mail, $path,$city); //create new user from UserClass
        $db = new dbClass($user);           //creaate obj db from dbClass
        if ($db->checkLogin()==0){          //if Login not exist 
            $db->insertUser();              //insert user to DATABASE
            $user->__destruct();            //free user memory 
            $_SESSION['message'] = 'Regisrtation Completed Successfully ';  //output message 
            header('Location:../login.php');    //go to "login.php" 
        }else{  //FALSE ->(login exist)
            $_SESSION['message'] = 'Login Or Email Exist'; 
            header('Location:../registration.php'); //go to "registration.php"
        }
    }else{  //Fail validation 
        $_SESSION['message'] = 'Different Password';
        header('Location:../registration.php');  // go to "registration.php"
        
    }   
    
   

    

?>