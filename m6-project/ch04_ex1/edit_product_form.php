<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement1 = $db->prepare($query);
$statement1->execute();
$categories = $statement1->fetchAll();
$statement1->closeCursor();

$query2 = 'SELECT *
          FROM products
          ORDER BY productID';
    $statement2 = $db->prepare($query2);
$statement2->execute();
$product = $statement2->fetchAll();
$statement2->closeCursor();

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>
   

    <main>
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post"
              id="add_product_form">

             <label>Category ID:</label>
    <select name="category_id">
    <?php foreach ($categories as $category) : 
     if ($category['categoryID'] == $product['categoryID']) {
        $selected = 'selected';
     } else {
        $selected = '';
     }
    ?>
      <option value="<?php echo $category['categoryID']; ?>" <?php echo $selected ?>>
          <?php echo $category['categoryName']; ?>
      </option>
    <?php endforeach; ?>
    </select><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $selected ?>
          <?php echo $product['productCode']; ?>"><br>
           

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $selected ?>
          <?php echo $product['productName']; ?>"><br>
           

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $selected ?>>
          <?php echo $product['listPrice']; ?>"><br>
            

            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>