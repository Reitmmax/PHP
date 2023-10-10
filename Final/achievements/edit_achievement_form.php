<?php
require('../database.php');
$query = 'SELECT *
          FROM games
          ORDER BY gameID';
$statement1 = $db->prepare($query);
$statement1->execute();
$games = $statement1->fetchAll();
$statement1->closeCursor();

$query2 = 'SELECT *
          FROM achievement
          ORDER BY achievementID';
    $statement2 = $db->prepare($query2);
$statement2->execute();
$achievements = $statement2->fetchAll();
$statement2->closeCursor();

$query3 = 'SELECT *
          FROM playtime
          ORDER BY playtimeID';
    $statement3 = $db->prepare($query2);
$statement3->execute();
$playtime = $statement3->fetchAll();
$statement2->closeCursor();

?>
<!DOCTYPE html>
<html>

<!-- the head section -->


<!-- the body section -->
<body>
    <?php include '../header-footer/header.php'; ?>
   

    <main>
        <h1>Edit Achievement</h1>
        <form action="edit_achievement.php" method="post"
              id="edit_achievement_form">

             <label>Game ID:</label>
    <select name="game_id">
    <?php foreach ($games as $game) : 
     if ($games['gameID'] == $achievement['gameID']) {
        $selected = 'selected';
     } else {
        $selected = '';
     }
    ?>
      <option value="<?php echo $game['gameID']; ?>" <?php echo $selected ?>>
          <?php echo $game['gameName']; ?>
      </option>
    <?php endforeach; ?>
    </select><br>

           

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $selected ?>
          <?php echo $achievement['achievementName']; ?>"><br>
           

            <label>Playtime:</label>
            <input type="text" name="time" value="<?php echo $selected ?>>
          <?php echo $playtime['playtimeTime']; ?>"><br>
            

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="../index.php">View Game List</a></p>
    </main>
<?php include '../header-footer/footer.php'; ?>
    
</body>
</html>