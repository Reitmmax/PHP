<?php
/*********************************************
   *        Author:  Maximilian Reitmayer
   * Last Modified: 1/25/22
   * Purpose: Processes submitted order form
**********************************************/
  
// copy passed form values from $_POST array and assign to new variables
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $find = $_POST['find'];
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Results: Bob's Auto Parts</title>
  <link href="styles.css" rel="stylesheet">
</head>

<body>
<main>
  <h1>Bob's Auto Parts</h1>
  <h2>Order Results</h2>
<?php 
// echo date and time order is processed
    echo '<p>Order processed at '.date('g:i a F d, Y').'</p>';
// echo order details
    //echo '<p>Your order details: </p>';
    //echo '<p>'.$tireqty.' tires<br>';
    //echo $oilqty.' bottles of oil<br>';
    //echo $sparkqty.' spark plugs</p>';
   // calculate total number of items ordered
    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;

    // echo quantity of each product ordered
if ($totalqty == 0) {
    echo 'You did not order anything on the previous page!</p>';
} else {
    if ($tireqty > 0) {
        echo $tireqty.' tires<br>';
    }
    if ($oilqty > 0) {
        echo $oilqty.' bottles of oil<br>';
    }
    if ($sparkqty > 0) {
        echo $sparkqty.' spark plugs<br>';
    }
    echo '</p>';
}
    
    
    // echo order details
    echo '<p>Total Items Ordered: '.$totalqty.'<br>';

    // create $totalamount variable with value of 0.00
    $totalamount = 0.00;
// define constants for product prices
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);
// calculate subtotal
    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;
// echo subtotal formatted with two decimals
    echo '<p>Subtotal: <b>$'.number_format($totalamount,2).'</b><br>';
// calculate order total with tax
    $taxrate = 0.10;  // local sales tax is 10%
    $totalamount = $totalamount * (1 + $taxrate);
// echo order total formatted with two decimals
    echo 'Total including tax: <b>$'.number_format($totalamount,2).'</b></p>';
    
    //echo '<p>Customer referral: '.$find.'</p>';
    
    // echo source of customer referral
    if ($find == "a") {
        echo '<p>Referral source: Existing customer</p>';
    } else if ($find == "b") {
        echo '<p>Referral source: TV advert</p>';
    } else if ($find == "c") {
        echo '<p>Referral source: phone directory</p>';
    } else if ($find == "d") {
        echo '<p>Referral source: word of mouth</p>';
    } else {
        echo '<p>Referral source: Unknown</p>';
    }
?> 




 </main>
 <footer>
  <p><small>&#169; <?php echo date('Y'); ?> Maximilian Reitmayer</small></p>
</footer>
  
</body>
</html>
