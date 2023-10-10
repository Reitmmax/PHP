<?php
  /********************************************
   * Author:  Max Reitmayer
   * Purpose: Uses echo statements to display
   *          selected answer for each quiz
   *          question
   *******************************************/
  // copy passed form values from $_POST array and assign to new variables
   
$question1 = filter_input(INPUT_POST, 'question1');
    $question2 = filter_input(INPUT_POST, 'question2');
    $question3 = filter_input(INPUT_POST, 'question3');
$question4 = filter_input(INPUT_POST, 'question4');
$question5 = filter_input(INPUT_POST, 'question5');
    
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
    
<h1>Great Explorers Quiz Score</h1>
    
    <?php
    function scoreQuestions() {
    if (count($_POST) == 5) {
  
echo '<p>Question 1: ' .  $GLOBALS['question1'] . '</p>';
     if ( $GLOBALS['question1'] == 'b') {
    echo ' (Correct!)</p>';
  } else {
    echo ' (Incorrect)</p>';
  }
    
echo '<p>Question 2: ' .  $GLOBALS['question2'] . '</p>';
    
     if ( $GLOBALS['question2'] == 'd') {
    echo ' (Correct!)</p>';
  } else {
    echo ' (Incorrect)</p>';
  }
    
echo '<p>Question 3: ' .  $GLOBALS['question3'] . '</p>';
    
     if ( $GLOBALS['question3'] == 'a') {
    echo ' (Correct!)</p>';
  } else {
    echo ' (Incorrect)</p>';
  }
    
echo '<p>Question 4: ' .  $GLOBALS['question4'] . '</p>';
   
     if ( $GLOBALS['question4'] == 'b') {
    echo ' (Correct!)</p>';
  } else {
    echo ' (Incorrect)</p>';
  }
    
echo '<p>Question 5: ' .  $GLOBALS['question5'] . '</p>';
  
     if ($GLOBALS['question5'] == 'c') {
    echo ' (Correct!)</p>';
  } else {
    echo ' (Incorrect)</p>';
  }
        } else {
    echo '<p>You did not answer all the questions! Click the <b>Back</b> 
    button in your browser to return to the quiz.</p>';
}
        }
scoreQuestions();
    
?>
</main>
<footer>
  <p><small>&#169; <?php echo date('Y'); ?> Max Reitmayer </small></p>
</footer>
</body>
</html>