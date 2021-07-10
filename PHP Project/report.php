<?php
    session_start();                        //if user not exist go to page "login.php"
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }else if(($_SESSION['user']['login'])!='admin'){
        header('Location:profile.php');
    }
    require_once("inc/dbClass.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOH</title>
    <link rel="stylesheet" href="css/style.css">
   
    
    
    
</head>
<body>
<?php 
require_once("helphtml/sidebar.php");    //add sidebar from file "sidebar.php" -->
require_once("helphtml/card.php");

$db = new dbClass(); 
$db->getUsers();

if(isset($_SESSION['message'])){
   echo ' <p class="msg">'.$_SESSION['message'] .'</p>';
              
   }
    unset($_SESSION['message'] );
    
require_once("helphtml/footer.php"); ?>     <!--add footer from file "footer.php" -->
</body>
</html>
