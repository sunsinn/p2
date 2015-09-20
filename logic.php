<?php
  # Builds an array from a CSV list of 1000 most common English words
  $file = fopen("1000-words-csv.csv","r");
  while(!feof($file))
  {
    $words[] = fgetcsv($file, 1000, ",");
  }
  fclose($file);

# adds first random word to password string
$r = array_rand($words);
$password = $words[$r][0];

$numwords = (int)$_POST["wordsnum"];
for ($i = 1; $i < $numwords; $i++)  {
    $r = array_rand($words);
    $password .= "-".$words[$r][0];
}

?>
