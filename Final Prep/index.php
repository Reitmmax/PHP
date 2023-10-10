<?php

require_once('database.php'); 
$queryPlaytime = 'SELECT * FROM playtime';
$statement1 = $db->prepare($queryPlaytime);
$statement1->bindValue(':playtime_id', $playtime_id);
$statement1->execute();
$category = $statement1->fetch();
$game = $category['gameName'];
$achievement = $category['achievementName'];
$playtime = $category['playtimeTime'];
$statement1->closeCursor();


?>
<main>
    <h1>Games</h1>
    <p>The point of the page is to be able to track you achivement and game status. for now, I am just going to display the results of the tables</p>
    <table>
        <ul>
            <li>Games</li>
            <li>Achievment</li>
            <li>Playtime</li>
        </ul>
        
        <ul>
            <li><?php echo $game ?> </li>
            <li><?php echo $achievement ?></li>
            <li><?php echo $playtime ?></li>
        </ul>
    </table>
    
    <ul>
        <li>
            <a href="">link1</a>
        </li>
        <li>
            <a href="">link2</a>
        </li>
    </ul>
</main>