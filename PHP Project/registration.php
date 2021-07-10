<!--Page REGISTRATION -->
<?php
    session_start();                                  //open session 
    if(isset($_SESSION['user'])){                     //if user exist go to page "profile.php" 
        header('Location: profile.php');              
    }
    require_once("inc/dbClass.php");                  //include DataBase Class
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisrtarion</title>
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
    
    <!-- Registration form -->

    <div id="conteiner">    
        
        <h1>Registration</h1>
    
    <form action="inc/singup.php" method="post" enctype="multipart/form-data">
        <input type="text"  name='login'  placeholder="Enter Login">
        <input type="text"  name='name' placeholder="Enter Your Full Name">        
        <input type="email"  name='mail'  placeholder="Enter Your Email">
        <input type="file" class="custom-file-input" name="avatar">
        <!-- city select from data base -->
        <div class="styled-select">
        <!-- <label  class="">Choose Your City</label> -->
        <select name='city'>   
            <option sected>Choose City</option>
        <?php  
            $db = new dbClass();    //create new obj 
            $db->getCities();            
        ?> 
        </select>
        </div>
        <!-- Second part of registration  -->
        <input type="password"  name='pass'  placeholder="Enter Password">
        <input type="password"  name='pass_confirm'  placeholder="Confirm Your Password">
        <button  type="submit">Registration</button>
        <p>
            Do you have account? - <a href ="/PHP project/login.php">Authorization!</a>   <!-- if account exist go to "login.php" -->
        </p>


        <!-- message if passwords not equals -->
        <?php
            if(isset($_SESSION['message'])){
                echo ' <p class="msg">'.$_SESSION['message'] .'</p>';
              
            }
                unset($_SESSION['message'] );
        ?>      

    </form>
    </div>
    
    
    <?php require_once("helphtml/footer.php"); ?>  <!--add footer from file "footer.php" -->
</body>
</html>