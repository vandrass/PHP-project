<!--PROFILE PAGE -->
<?php
    session_start();
    if(!isset($_SESSION['user'])){   //if do not user go to "login.php"
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
<?php require_once("helphtml/sidebar.php"); ?>   <!--add sidebar from file "sidebar.php" -->
    <!-- Profile card -->
    
    <!--view profile -->
<div class="card">
    <img src = "<?=$_SESSION['user']['avatar']?>" width="200" alt="" class="avatar">  

  <h1>Hi!: <?= $_SESSION['user']['name']?></h1>
  <p class="title" >Your City: <?= $_SESSION['user']['city_name']?></p>  
  <a href="#">Email: <?= $_SESSION['user']['email']?></a><br>    
  <a class="logout-a" href="inc/logout.php">Logout</a>  
</div>    
  

    <?php require_once("helphtml/footer.php"); ?>     <!--add footer from file "footer.php" -->
</body>
</html>