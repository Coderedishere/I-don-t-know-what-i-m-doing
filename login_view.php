<?php  
 session_start();  
 $host = "localhost";  
 $username = "final_user";  
 $password = "sesame";  
 $database = "my_HLindner_final.sql";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Login Script using PDO</title>  
           <link rel="stylesheet" href="style.css">
      </head>  
      <body>  
           <br />  
           <div>  
                <?php  
                if(isset($message))  
                {  
                     echo '<label>'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">PHP Login Script using PDO</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username">  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password">  
                     <br />  
                     <input type="submit" name="login" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  