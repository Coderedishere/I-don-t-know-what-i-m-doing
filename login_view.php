  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Login Script using PDO</title>  
           <link rel="stylesheet" href="style.css">
      </head>  
      <body>  
           <br>  
           <div>  
                <?php  
                if(isset($message))  
                {  
                     echo '<label>'.$message.'</label>';  
                }  
                ?>  
                <h2 align="">PHP Login Script using PDO</h2><br>  
                <form method="post">  
                     <label>Username:</label>  
                     <input type="text" name="username">  
                     <br>
                     <br>
                     <label>Password:</label>  
                     <input type="password" name="password">  
                     <br>  
                     <input type="submit" name="login" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  