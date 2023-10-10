<?php
require_once('../database.php');

// Get IDs
$achievement_id = filter_input(INPUT_POST, 'achievement_id', FILTER_VALIDATE_INT);
$game_id = filter_input(INPUT_POST, 'game_id', FILTER_VALIDATE_INT);

// Delete the achievement from the database
if ($achievement_id != false && $game_id != false) {
    $query = 'DELETE FROM achievements
              WHERE achievementID = :achievement_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':achievement_id', $achievement_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Game List page
include('../index.php');