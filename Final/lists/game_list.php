<?php
require_once('../database.php');

// Get all categories
$query = 'SELECT * FROM games
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
    <h1>Game List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($games as $game) : ?>
        <tr>
            <td><?php echo $game['gameName']; ?></td>
            <td>
                <form action="../games/delete_games.php" method="post">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>    
        <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Game</h2>
    
    <!-- add code for the form here -->  
    <form action="../games/add_games.php" method="post"
          id="add_game_form">

        <label>Name:</label>
        <input type="text" name="name" />
        <input id="add_achievement_button" type="submit" value="Add"/>
    </form>
    
    <br>
    <p><a href="../index.php">List Games</a></p>

    </main>
    <?php include '../header-footer/footer.php'; ?>

</body>
</html>