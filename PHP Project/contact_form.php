<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
          
    
</head>
<body>
    <!-- Side navigation -->
    <?php require_once("helphtml/sidebar.php"); ?>   <!--side bar include -->
    <?php require_once("helphtml/card.php"); ?>   <!--client card  include -->
    
    
<div class="side-card">
<h1>Contact US</h1>
    <form action="inc/contact.php" class="contact" method="post">
    <input type="email" name="email"  placeholder="Enter your e-mail to admin">
    <textarea type="text" name="text"  rows="10"  placeholder="Enter your message to admin"></textarea>
    <button  type="submit">SEND FORM</button>
    <?php
            if(isset($_SESSION['message'])){
                echo ' <p class="msg">'.$_SESSION['message'] .'</p>';
                
            }
                unset($_SESSION['message'] );
        ?> 

    </form>
   
 
</div>    
   
    
    <?php require_once("helphtml/footer.php"); ?>
</body>
</html>