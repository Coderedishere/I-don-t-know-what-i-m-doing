<?php
require_once('../Model/config.php');
include_once('../Views/music_view.php');
if(isset($_SESSION["artists"])) {
    $artistNames = filter_input(INPUT_GET, 'artistNames', FILTER_VALIDATE_INT);
}
//'SELECT artists.artistNames, albums.albumNames, albums.albumReleaseDate, albums.genre, tracks.trackNumbers,tracks.trackNames,tracks.trackLength FROM artists INNER JOIN albums ON albums.artistNames = artists.artistNames INNER JOIN tracks on tracks.albumNames = artists.artistNames';
$queryArtist = 'SELECT * FROM artists';
$statement1 = $db->prepare($queryArtist);
$statement1->bindValue(':artists');
$statement1->execute();
$artists = $statement1->fetchAll();
$artists = $artists['artists'];
$statement1->closeCursor();  

$queryAlbums = 'SELECT * FROM albums';
$statement2 = $db->prepare($queryAlbums);
$statement2->bindValue(':albums');
$statement2->execute();
$albums = $statement2->fetchAll();
$albums = $albums['albums'];
$statement2->closeCursor();

$queryTracks = 'SELECT * FROM tracks';
$statement3 = $db->prepare($queryTracks);
$statement3->bindValue(':tracks');
$statement3->execute();
$tracks = $statement3->fetchAll();
$tracks = $tracks['tracks'];
$statement3->closeCursor();


//
//$query = 'SELECT * FROM albums
//                       ORDER BY albumNames';
//$statement = $db->prepare($query);
//$statement->execute();
//$albums = $statement->fetchAll();
//$statement->closeCursor(); 
//    
//$query = "SELECT * FROM tracks"; 
//$statement = $db->prepare($query); 
//$statement->bindParam('tracks', $_POST['tracks'], PDO::PARAM_STR);
//$statement->execute(    
//); 
//
//SELECT
//$result = $statement->fetchAll();
//echo ($result);
//  
//$result = $statement->fetchAll();
//echo ($result);
//'SELECT artists.artistNames, albums.albumNames, albums.albumReleaseDate, albums.genre, tracks.trackNumbers,tracks.trackNames,tracks.trackLength FROM artists INNER JOIN albums ON albums.artistNames = artists.artistNames INNER JOIN tracks on tracks.albumNames = artists.artistNames'
?>