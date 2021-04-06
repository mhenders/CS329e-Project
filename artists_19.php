<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$script = $_SERVER['PHP_SELF'];

$art = explode("\n", file_get_contents('artists_19.txt'));

print <<<PAGE1
<html>

  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="artists_19.css" rel="stylesheet">
    <script src="artists_19.js"></script>
  </head>

<body>
  <div id="countDown"></div>

  <!-- Navigation Bar -->
  <div class="NaviBar">
      
    <!-- Left Links -->
    <a class = 'pastlineups' href="placeholder.html">Past Line Ups</a>
    <a class = 'bites' href="placeholder.html">Bites & Booze</a>
    
    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.html"><img id='logo' src="logo.png"></a>
    </div>
    
    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="placeholder.html">MyACL</a>
      <a class = 'contact' href="contact.html">Contact Us</a>
    </div>

</div>
PAGE1;

$length = count($art);
for ($x = 0;$x < $length;$x++) {
    $new_id = strval($x + 1);
    print <<<PAGE1
    <button onClick = "artistPage(this.id);" class = "artist" id=$new_id>$art[$x]</button>
PAGE1;
}

print <<<PAGE1
  <p id="name"></p>

  </body>
  </html>
PAGE1;
?>