<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Apache server test</title>
<style>
  body {font-family: sans-serif; font-size: 1.2em;}
  span {color: slateblue; font-weight: bold;}
  footer {border-top: 0.09em solid #e5e5e5;}
  footer > p {font-style: italic;}
</style>
    </head>

<body>
<h1>The Moment of Truth</h1>
<p>If the current date and time is displayed below, your local Apache server is running and PHP is configured correctly for your timezone.</p>
<?php echo '<p>Congratulations. Today is <span>' . date('D, M d, Y') . '</span> and the time is now <span>' . date('g:i a') . '</span></p>'; ?>
<p>This page was rendered with PHP version <?php echo phpversion(); ?> </p>
    <footer>
  <p><small>&#169; <?php echo date('Y'); ?> Maximilian Reitmayer</small></p>
</footer>
</body>
</html>