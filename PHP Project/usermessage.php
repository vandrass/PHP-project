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
    <title>news</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php require_once("helphtml/sidebar.php"); ?>   <!--side bar include -->
    <div id="news">
    <h1>Messages</h1>
    <?php 
        $message = new dbClass();
        $message->getMessage();
       
    ?>


    </div>


    <?php require_once("helphtml/card.php"); ?>         <!--add card from file "card.php" -->
    <?php require_once("helphtml/footer.php"); ?>       <!--add footer from file "footer.php" -->
</body>
        
</html>