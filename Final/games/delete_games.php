<?php

require_once('../database.php');

$game_id = filter_input(INPUT_POST, 'game_id', FILTER_VALIDATE_INT);

// if ($category_id != false)  //
if ($game_id == null || $game_id == false){
    $error = "ID invalid";
    include('../error/error.php');
}
        
else { require_once('../database.php'); 
    $query = 'DELETE FROM games
              WHERE gameID = :game_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $game_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

include('../lists/game_list.php');