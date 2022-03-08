<?php 
 session_start(); 
require_once('Model/config.php');
if(empty($_POST["username"]) || empty($_POST["password"]))  
{  
$message = '<label>All fields are required</label>';  
}  
 else  {  
$query = "SELECT * FROM users WHERE username = :username AND password = :password";  
$statement = $connect->prepare($query);  
$statement->execute(  
array(  
'username'     =>     $_POST["username"],  
'password'     =>     $_POST["password"]  
                     )  
); 

if($_POST["username"] == FALSE) || ($_POST["password"] == FALSE) {
    $message = '<label>Your username or password is incorrect!</label';
}

$count = $statement->rowCount();  
if($count > 0)  {  
$_SESSION["username"] = $_POST["username"];  
header("location:login_welcome.php");  
}  else  {  
$message = '<label>Wrong Data</label>';  
    }  
}  
      
   
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();
 } 
include('login_view.php');
 ?>  