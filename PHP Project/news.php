<!--PAGE NEWS -->
<?php
    session_start();                        //if user not exist go to page "login.php"
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
   require_once("inc/dbClass.php");     // <!--connection backend file -->
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
    <h1>News</h1>   

    <?php 
        $news = new dbClass();   //create obj in dbClass
        $news->getNews();   //output 
    ?>


    </div>


    <?php require_once("helphtml/card.php"); ?>         <!--add card from file "card.php" -->
    <?php require_once("helphtml/footer.php"); ?>       <!--add footer from file "footer.php" -->
</body>
</html>