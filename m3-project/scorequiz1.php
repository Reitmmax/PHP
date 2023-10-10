<?php
  /********************************************
   * Author:  Max Reitmayer
   * Purpose: Uses echo statements to display
   *          selected answer for each quiz
   *          question
   *******************************************/
// copy passed form values from $_POST array and assign to new variables
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
?> 

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Score: Great Explorers Quiz</title>
  <style>
  body {
      font-family: sans-serif;
  }  
  </style>
</head>

<body>
<main>
<h1>Great Explorers Quiz Score</h1><?php
echo '<p>Question 1: ' . $question1 . '</p>';
echo '<p>Question 2: ' . $question2 . '</p>';
echo '<p>Question 3: ' . $question3 . '</p>';
echo '<p>Question 4: ' . $question4 . '</p>';
echo '<p>Question 5: ' . $question5 . '</p>';
  
?>
</main>
<footer>
  <p><small>&#169; <?php echo date('Y'); ?> Max Reitmayer </small></p>
</footer>
</body>
</html>