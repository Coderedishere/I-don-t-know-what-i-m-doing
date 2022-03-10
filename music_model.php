<?php
require_once('../Model/config.php');
include_once('../Views/music_view.php');
if(isset($_SESSION["artists"])) {
    $artistNames = filter_input(INPUT_GET, 'artistNames', FILTER_VALIDATE_INT);
}  

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
//$result = $statement->fetchAll();
//echo ($result);
//  
//$result = $statement->fetchAll();
//echo ($result);
?>