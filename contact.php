<?php
  # get the incoming information
  $email = $_POST["email"];
  $comments = $_POST["comments"];


  $file_w = fopen("contact.txt", "a");
  $string1 = $_POST["email"] . ":";
  fwrite($file_w, $string1);
  $string2 = $_POST["comments"] . "\n";
  fwrite($file_w, $string2);
  fclose($file_w);

  # Write thank you page
  print <<<FORM_RESULT
  <html>
  <head>
  <title> Form Submitted </title>
  </head>
  <body>
  <h1> Thank You for Your Input </h1>
  </body>
  </html>
FORM_RESULT;

?>
