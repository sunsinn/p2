<!DOCTYPE html>
<html>
  <head>
    <title>XKCD-Style Password Generator</title>
    <?php require 'logic.php'; ?>
  </head>
  <body>
    <h2>XKCD-Style Password Generator</h2>
    <h3>CSCI E-15 Project 2</h3>
    <div id="password">
      <?php echo $password ?>
    </div>
    <div>
    <form method="POST" action="index.php">
      <input type="range" name="wordsnum" min="4" max="12" value="4">Number of words (4-12)<br>
      <input type="checkbox" name="number" value="num">Include number<br>
      <input type="checkbox" name="symbol" value="sym">Include symbol<br>

      <input type="submit" value="Give me a password!">
    </form>
    Inspired by <a href = "http://xkcd.com/936/">Randall Munroe's XKCD</a><br>
    <img src = "password_strength.png" />
  </div>
  </body>
</html>
