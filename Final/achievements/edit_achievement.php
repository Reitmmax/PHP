<?php
// Get the product data
$game_id = filter_input(INPUT_POST, 'game_id', FILTER_VALIDATE_INT);
$playtime_id = filter_input(INPUT_POST, 'playtime_id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$playtime = filter_input(INPUT_POST, 'playtime');

// Validate inputs
if ($game_id == null || $game_id == false || $playtime_id == null || $playtime_id == false ||
     $name == null || $playtime == null ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('../error/error.php');
} else {
    require_once('../database.php');

    // Add the product to the database  
    $query = 'INSERT INTO achievements
                 (achievementID, achievementName)
              VALUES
                 (:achievement_id, :name );';
    $statement1 = $db->prepare($query);
    $statement1->bindValue(':achievement_id', $achievement_id);
    $statement1->bindValue(':name', $name);
    $statement1->execute();
    $statement1->closeCursor();
    
     $query = 'INSERT INTO playtime                 (playtimeID, playtimeTime)
              VALUES
                 (:playtime_id, :time );';
    $statement2 = $db->prepare($query);
    $statement2->bindValue(':playtime_id', $playtime_id);
    $statement2->bindValue(':time', $time);
    $statement2->execute();
    $statement2->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>