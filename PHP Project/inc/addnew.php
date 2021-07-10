<!--PROCESS ADD NEW  NEWS -->
<?php 
session_start();
require_once("dbClass.php");                  //using class connection
$title = $_POST['title'];
$text= $_POST['text'];
$path ='newsimg/'.time().$_FILES['image']['name'];   //PATH file

$addnews = new dbClass();  //create obj from dbClass


if(!empty($title) && !empty($text)){                                        //if user input title and text 
    if(!move_uploaded_file($_FILES['image']['tmp_name'], '../'.$path)){     //check if img load successfully
        $_SESSION['message'] = 'Image Upload error';
        header('Location:../addnews.php');                  //go to addnews 
    } else{                                                                 

    $addnews->insertNews($title,$text,$path);                //query insert new to database 
        header('Location:../news.php');
    }
}else{                                                                      //if user input not title and text
$_SESSION['message'] = 'Title or Text not Found';
header('Location:../addnews.php');
}
?>
