<?php
require('../database.php');
$query = 'SELECT *
          FROM games
          ORDER BY gameID';
$statement = $db->prepare($query);
$statement->execute();
$games = $statement->fetchAll();
$statement->closeCursor();

$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->

 <?php include '../header-footer/header.php'; ?>
<!-- the body section -->
<body>
    <header><h1>Game Manager</h1></header>

    <main>
        <h1>Add Achievement</h1>
        <form action="add_achievement.php" method="post"
              id="add_achievement_form">

            <label>Games:</label>
            <select name="game_id">
            <?php foreach ($games as $game) : ?>
                <option value="<?php echo $game['gameID']; ?>">
                    <?php echo $game['gameName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            

            <label>Achievement:</label>
            <input type="text" name="name"><br>

            <label>Playtime:</label>
            <input type="text" name="time"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="../index.php">View Game List</a></p>
    </main>

 <?php include '../header-footer/footer.php'; ?>
</body>
</html>