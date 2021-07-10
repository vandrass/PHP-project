<!--PROCESS CONTACT WITH ADMIN-->
<?php
session_start();                 //session start 
require_once("dbClass.php");     //include dbClass

   $insert = new dbClass();      //create obj dbClass
   $email =  $_POST["email"];
   $text =  $_POST["text"];
    if(!empty($_POST["email"]) && !empty($_POST["text"]))       //check if email and text not empty 
    {
            $insert->request_to_admin($email, $text);            //function reqest to admin in dbClass  
            $_SESSION['message'] = 'Request Send Successfully ';        
            header('Location:../contact_form.php');             //go to "contact _form.php"
    }else{
   
    $_SESSION['message'] = 'Empty email or text data';          
    header('Location:../contact_form.php');                     //go to "contact _form.php"
    } 
   
    
?>

