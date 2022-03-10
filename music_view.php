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