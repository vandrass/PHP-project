<!--DATA BASE CLASS -->
<?php
require_once("user.php");  //include class user
require_once("city.php");   //include class city 
class dbClass
{
private $host;
private $db;
private $charset;
private $user;
private $pass;
protected $userObject;
private $opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
private $connection;

//CONSTRUCTOR 
public function __construct(User $userObject=null,string $host= "localhost", string $db = "php project",string $charset = "utf8", string $user = "root", string $pass = "")
    {
        $this->host = $host;
        $this->db = $db;
        $this->charset = $charset;
        $this->user = $user;
        $this->pass = $pass;
        $this->userObject = $userObject;
    }
private function connect()      //connect with PDO
    {
        $dns = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->connection = new PDO($dns, $this->user, $this->pass, $this->opt);
    }
public function disconnect()  
    {
        $this->connection = null;
        
    }
        //function check login 
public function checkLogin(){
        $this->connect();   //data base connect 
        $result=$this->connection->query("SELECT * FROM users WHERE login='{$this->userObject->getLogin()}' OR email = '{$this->userObject->getMail()}'");  //query to get user from db -> where equal user name or e-mail 
        
        if($result->rowCount()>0){      //if user exist (TRUE)
            return 1;
        }else return 0;                 //else disconnect from db 
        $this->disconnect();
    }
           

//function insert user to db 
public function insertUser(){
    $this->connect();       //data base connect
    //query to insert user data to db 
    $this->connection->query("INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `avatar`,`city_code`) VALUES (NULL, '{$this->userObject->getName()}', '{$this->userObject->getLogin()}', '{$this->userObject->getMail()}', '{$this->userObject->getPass()}', '{$this->userObject->getAvatar()}','{$this->userObject->getCity()}')"); 

    $this->disconnect();
}    
//function checkUSER -> func check if user autorization correct   
public function checkUser(){
    $this->connect();           //connect to db 
    //query check user   autorization 
    $result = $this->connection->query("SELECT * FROM `users` u INNER JOIN `city` c ON c.city_code=u.city_code  WHERE `login` = '{$this->userObject->getLogin()}' AND  `password` ='{$this->userObject->getPass()}' ");
      if($result->rowCount()>0){    // TRUE if  autorization is ok 
            $user = $result->fetch();  //user - array assoc with data from db  
            
           $_SESSION['user'] = [        //insert user session 
               "id" =>$user['id'], 
               "name" =>$user['name'],
               "avatar" =>$user['avatar'],
               "email" =>$user['email'],
               "login" =>$user['login'],
               "city_name" =>$user['city_name'] 
           ] ;
      }else{                                                    // ELSE ->  autorization is not ok
        $_SESSION['message'] = 'Wrong Login or Password';       // MESSAGE 
        header('Location:../login.php');                        //go to "login.php"
      }

    $this->disconnect();        //disconnect from db 
}  
//Function for GET Cities from DATA BASE
public function getCities()
    {
        $this->connect();        
        $result = $this->connection->query("SELECT * FROM `city`");  //query get all data from table "City"
        while($row=$result->fetchObject('City')) {          //create object $row (City class)        
            
            echo ' <option value="'.$row->getCityId().'">'.$row->getCityName().'</option>';        //list options 
    }
        $this->disconnect();        //disconnect from db
        
        
    }
    
////////////////////////// contact us ///////////////////////////////////////////////////
//function  request_to_admin($email, $text) -> Function insert request to admin from user 
//param: $email - user email , $text - text to admin 
public function request_to_admin($email, $text)
{
    $this->connect(); 
    $this->connection->query("INSERT INTO `request_to_admin`(`email`, `request`) VALUES ('$email', '$text')"); //query insert data to DATABASE
    $this->disconnect();
}
/*************************** output users message for admin ************************* */
//function getMessage() -> Function get messeges from data base 
public function getMessage(){
    $this->connect(); 
    $result=$this->connection->query("SELECT * FROM `request_to_admin` ORDER BY `id` DESC");  //sql query (get users message from database)

        while($row = $result->fetch()){               //put result of query to assoc array $row
            echo "<h2>".$row['email']."</h2>".'<br>';                 //OUTPUT DATA
            echo "<p>".$row['request']."</p>".'<br>';
        }
    $this->disconnect();
}
////////////////////////////////////save users data to file//////////////////
public function getUsers()
    {
        $this->connect();        
        $result = $this->connection->query("SELECT `id`,`name`,`login`,`email`, c.city_name FROM `users` u INNER JOIN `city` c ON c.city_code=u.city_code");  //query get all data from table "City"
        $fp = fopen('users.txt', 'w+');  //open file to write
        while($row=$result->fetch()) {                          //loop run per person and him data and put to assoc array $row 
          $test= fwrite($fp, implode("      ", $row).PHP_EOL);      //write data into file per person per line                  
        }
        fclose($fp);    //close file 
        $this->disconnect();//disconnect from db


        if($test == 0)  //check if data exist 
        $_SESSION['message'] = 'File didn\'t write'; 
            
        else   $_SESSION['message'] = 'File was written successfully'; 
    }
///////////////////// insert news ////////////////////////////
//function insertNews($title,$text,$path) -> function insert news to database 
//param: $title -> title of news 
//param: $$text -> text of news 
//param: $path -> path 
public function insertNews($title,$text,$path){
    $this->connect();       //data base connect
    //query to insert user data to db 
    $this->connection->query("INSERT INTO `news` (`title`, `text`,`data`,`time`,`image`)  
    VALUES ('$title','$text',CURRENT_DATE() , CURRENT_TIME(),'$path')"); //query insert news to database 

    $this->disconnect();    //disconnect
}  


///////////////////// output news ////////////////////////////
public function getNews(){
    $this->connect(); 
    $result=$this->connection->query("SELECT * FROM `news` ORDER BY `id` DESC /* LIMIT 3 */"); //sql query (get 3 last news from database)
    while($row = $result->fetch()){                //put result of query to assoc array $row
        echo "<h2>".$row['title']."</h2>"."<p>".$row['data']." (".$row['time'].")"."</p>".'<br>';// title of news with date and time
        echo "<img src = {$row['image']} width=100px>".'<br>';// news image
        echo "<p>".$row['text']."</p>".'<br>';// text of news
        
        }
    $this->disconnect();
    } 
}

?>