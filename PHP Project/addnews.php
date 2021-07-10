<!--ADD NEWS PAGE -->
<?php
    session_start();                            //if do not user go to "login.php"
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addnews</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php require_once("helphtml/sidebar.php"); ?>   <!--include help files for html -->
    <?php require_once("helphtml/card.php"); ?>
<div id="conteiner">
    <h1>News Adding</h1>
    <form action="inc/addnew.php" class="addnew" method="post" enctype="multipart/form-data">
    <input type="text" name="title"  placeholder="Title">
    <textarea type="text" name="text"  rows="10"  placeholder="Text"></textarea>
    <input type="file"  name="image">
    <button  type="submit">Add News</button>
    <?php
            if(isset($_SESSION['message'])){
                echo ' <p class="msg">'.$_SESSION['message'] .'</p>';
                
            }
                unset($_SESSION['message'] );
        ?> 

    </form>
    

</div>
    <?php require_once("helphtml/footer.php"); ?>   <!--add footer from file "footer.php" -->
</body>
</html>