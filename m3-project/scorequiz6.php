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
  

    $correctAnswers = array('b', 'd', 'a', 'b', 'c');
$totalCorrect = 0;

    $count = 1;
do {
  echo "<p>Question $count: " . $GLOBALS["question$count"];
  if ($GLOBALS["question$count"] == $correctAnswers[$count-1]) {
    echo ' (Correct!)</p>';
    ++$totalCorrect;
  } else {
    echo ' (Incorrect)</p>';
  }
  ++$count;
} while ($count <= 5); // Ends do-while loop
     echo "<p>You scored $totalCorrect out of 5 answers correctly!</p>";

    

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