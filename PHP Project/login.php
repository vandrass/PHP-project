<!-- Page Log In -->
<?php
    session_start();                          //open session
    if(isset($_SESSION['user'])){             //if user exist go to page "profile.php"
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
    <!-- Authorization form -->

    <div id="conteiner">
    <h1>Authorization</h1>
    <form action="inc/singin.php" method="post">
        <input type="text"  name='login' id="login" placeholder="Enter Login">
       
        <input type="password" name='pass' id="pass" placeholder="Enter Password">
        <button  type="submit">Log In</button>
        <p>
            Don't have account? - <a href ="/PHP project/registration.php">Sign Up!</a>   <!-- if don't have account go to "registration.php" -->
        </p>
        <?php
            if(isset($_SESSION['message'])){        //check if data wrong -> output message  
                echo ' <p class="msg">'.$_SESSION['message'] .'</p>';                
            }
                unset($_SESSION['message'] );
        ?>

    </form>
    </div>
            
    <?php require_once("helphtml/footer.php"); ?>    <!--add footer from file "footer.php" -->
</body>
</html>