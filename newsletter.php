<?php
  # get the incoming information
  $name = $_POST["name"];
  $email = $_POST["email"];

  # open file 'info.txt' and append the name and e-mail address
  if ($fh = fopen ("newsletter.txt", "a"))
  {
    fwrite ($fh, "$name  $email \n");
    fclose ($fh);
  }

  # Write thank you page
  print <<<RESULT
  <html>
  <head>
  <title> Form Submitted </title>
  </head>
  <body>
  <h1> Thank You for Signing Up! </h1>
  </body>
  </html>
RESULT;

?>
