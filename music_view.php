<!DOCTYPE html>
<html>  
 <head>  
    <title>Music Table</title>  
    <link rel="stylesheet" href="../Views/style.css">
 </head>  
 <body>  
    <label>Music Table</label>
    <table>
        <th><?php echo $artists['artistNames']; ?></th>
        <th><?php echo $albums['albumNames']; ?></th>
        <th><?php echo $albums['genre']; ?></th>
        <th><?php echo $tracks['trackNumbers']; ?></th>
        <th><?php echo $tracks['trackNames']; ?></th>
        <th><?php echo $tracks['trackLength']; ?></th>
        <br>
    </table>
        <a href="../Views/logout.php">Logout</a>
 </body>  
</html>