<?php
// getting category from list
$name = filter_input(INPUT_POST, 'name');
if ($name == null){ // run if statment to make sure it is valid
    $error = "Data is invalid, try again";
        include('error.php');
} else {
    require_once('database.php');


//add to category table
$query = 'INSERT INTO categories (categoryName)
        VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

include('category_list.php');
}
?>