<?php
// getting category from list
$name = filter_input(INPUT_POST, 'name');
if ($name == null){ // run if statment to make sure it is valid
    $error = "Data is invalid, try again";
        include('error.php');
} else {
    require_once('../database.php');


//add to category table
$query = 'INSERT INTO games (gameName)
        VALUES (:game_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':game_name', $name);
    $statement->execute();
    $statement->closeCursor();

include('../lists/game_list.php');
}
?>