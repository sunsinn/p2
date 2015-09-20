<?php

  $file = fopen("1000-words-csv.csv","r");
  while(!feof($file))
  {
    $words[] = fgetcsv($file, 1000, ",");
  }
  fclose($file);

?>
