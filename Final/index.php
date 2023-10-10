<?php
require_once('database.php');

// Get category ID
if (!isset($game_id)) {
    $game_id = filter_input(INPUT_GET, 'game_id', 
            FILTER_VALIDATE_INT);
    if ($game_id == NULL || $game_id == FALSE) {
        $game_id = 1;
    }
}
// Get name for selected game
$queryGame = 'SELECT * FROM games
                  WHERE gameID = :game_id';
$statement1 = $db->prepare($queryGame);
$statement1->bindValue(':game_id', $game_id);
$statement1->execute();
$game = $statement1->fetch();
$game_name = $game['gameName'];
$statement1->closeCursor();


// grabs games
$query = 'SELECT * FROM games
                       ORDER BY gameID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

// grabs achievements for each game
$queryAchievements = 'SELECT * FROM achievements
                  WHERE gameID = :game_id;
                  ORDER BY achievementID';
$statement3 = $db->prepare($queryAchievements);
$statement3->bindValue(':game_id', $game_id);
$statement3->execute();
$achievements = $statement3->fetchAll();
$statement3->closeCursor();

// grabs playtimes
$queryPlaytime = 'SELECT * FROM playtime
                  WHERE gameID = :game_id;
                  ORDER BY gameID';
$statement4 = $db->prepare($queryPlaytime);
$statement4->bindValue(':game_id', $game_id);
$statement4->execute();
$playtimes = $statement4->fetchAll();
$statement4->closeCursor();
?>
<!DOCTYPE html>
<html>
<?php include 'header-footer/header.php'; ?>
<main>
    <body>
<header><h1>Game Manager</h1></header>
<main>
    <h1>Achievement List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Game list</h2>
        <nav>
        <ul>
            <?php foreach ($game as $games) : ?>
            <li><a href=".?game_id=<?php echo $game['gameID']; ?>">
                    <?php echo $game['gameName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>          
    </aside>

    <section>
        <!-- display a table of achievements -->
        <h2><?php echo $game_name; ?></h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Playtime</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($achievements as $achievement): ?>
            <?php foreach ($playtimes as $playtime) ?>
    
            <tr>
                <td><?php echo $achievement['achievementName']; ?></td>
                <td class="right"><?php echo $playtime['playtimeTime']; ?></td>
                <td><form action="achievements/delete_achievement.php" method="post">
                    <input type="hidden" name="game_id"
                           value="<?php echo $achievement['gameID']; ?>">
                    <input type="hidden" name="acheivement_id"
                           value="<?php echo $achievement['achievementID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>"
                   <td><form action="achievements/edit_achievement_form.php" method="post">
                   <input type="hidden" name="game_id"
                           value="<?php echo $achievement['gameID']; ?>">
                    <input type="hidden" name="achievement_id"
                           value="<?php echo $achievement['achievementID']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="achievements/add_achievement_form.php">Add Achievements</a></p>
        <p><a href="lists/game_list.php">List Games</a></p>        
    </section>
</main>
<?php include 'header-footer/footer.php'; ?>
