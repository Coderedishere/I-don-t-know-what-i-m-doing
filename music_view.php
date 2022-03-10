<?php
if(isset($_SESSION["artists"]))  
 {  
//      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
//      echo '<br /><br /><a href="logout.php">Logout</a>';
$queryArtist = 'SELECT * FROM artists
                  WHERE artistNames = :artistNames';
$statement1 = $db->prepare($queryArtist);
$statement1->bindValue(':artistNames', $artistNames);
$statement1->execute();
$artists = $statement1->fetchAll();
$artistNames = $artists['artistNames'];
$statement1->closeCursor();    


$query = 'SELECT * FROM albums
                       ORDER BY albumNames';
$statement = $db->prepare($query);
$statement->execute();
$albums = $statement->fetchAll();
$statement->closeCursor(); 
    
$query = "SELECT * FROM tracks"; 
$statement = $db->prepare($query); 
$statement->bindParam('tracks', $_POST['tracks'], PDO::PARAM_STR);
$statement->execute(    
); 
  
$result = $statement->fetchAll();
echo ($result);
  
$result = $statement->fetchAll();
echo ($result);
?>
<!DOCTYPE html>
<html>  
 <head>  
    <title>Music Table</title>  
    <link rel="stylesheet" href="../Views/style.css">
 </head>  
 <body>  
    <h2>Music Table</h2> 
    <table>
        <th><?= $_SESSION['artistNames']?></th>
        <th><?= $_SESSION['albumNames']?></th>
        <th><?= $_SESSION['album']?></th>
        <br>
    </table>
        <a href="../Views/logout.php">Logout</a>
 </body>  
</html>