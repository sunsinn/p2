<?php
  # Builds an array from a CSV list of 1000 most common English words
  $file = fopen("4000-most-common-english-words-csv.csv","r");
  while(!feof($file))
  {
    $words[] = fgetcsv($file, 1000, ",");
  }
  fclose($file);

  # Builds an array of special characters
  $chars = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')');

  # adds first random word to password string
  $passphrase = $words[rand(0,3999)][0];

  #adds remaining random words to password string
  if (empty($_POST["wordsnum"])) {
    $numwords = 4;
  }
  else {
    $numwords = $_POST["wordsnum"];
  }

  if (empty($_POST["separator"]) || $_POST["separator"] == "hyphen") {
    for ($i = 1; $i < $numwords; $i++)  {
    $passphrase .= "-".$words[rand(0,3999)][0];
    }
  }
  elseif ($_POST["separator"] == "space") {
    for ($i = 1; $i < $numwords; $i++)  {
      $passphrase .= " ".$words[rand(0,3999)][0];
    }
  }
  else {
    for ($i = 1; $i < $numwords; $i++)  {
      $passphrase .= ucfirst($words[rand(0,3999)][0]);
    }
  }
  # appends a random number if the number box is checked
  if (!empty($_POST["number"])) {
    $passphrase .= rand(1,99);
  }

  # appends a random character from the chars array if the character box is checked
  if (!empty($_POST["symbol"])) {
    $passphrase .= $chars[rand(0,9)];
  }

  # capitalizes first letter if the capital box is checked
  if (!empty($_POST["capital"])) {
    $passphrase = ucfirst($passphrase);
  }
?>
