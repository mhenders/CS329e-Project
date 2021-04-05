<?php
  # get the incoming information
  $email = $_POST["email"];
  $comments = $_POST["comments"];

  # open file 'info.txt' and append the name and e-mail address
  if ($fh = fopen ("contact.txt", "a"))
  {
    fwrite ($fh, "$email  $comments \n");
    fclose ($fh);
  }

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
