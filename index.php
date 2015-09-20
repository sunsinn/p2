<!DOCTYPE html>

<html>
  <head>
    <title>XKCD-Style Password Generator</title>
    <?php require 'logic.php'; ?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>XKCD-Style Password Generator</h1>
    <h3>CSCI E-15 Project 2</h3>
    <div id="password">
      <?php echo $passphrase ?>
    </div>
    <div id="form">
    <form method="POST" action="index.php">
      Number of words:<select name="wordsnum">
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select><br>
      Include number: <input type="checkbox" name="number" value="yes"><br>
      Include symbol: <input type="checkbox" name="symbol" value="yes"><br>
      Include capital: <input type="checkbox" name="capital" value="yes"><br>

      <input type="submit" value="Give me a password!">
    </form>
  </div>
  <div id = "credits">
    Inspired by <a href = "http://xkcd.com/936/">Randall Munroe's XKCD</a><br>
    <img src = "password_strength.png" /><br>
    Word list from <a href = "http://www.rupert.id.au/resources/1000-words.php">http://www.rupert.id.au/resources/1000-words.php</a>
  </div>
  </body>
</html>
