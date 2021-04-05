<!DOCTYPE html>

<html lang="en">

  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="lineup2018.css" rel="stylesheet">
    <script src="main.js"></script>
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

    <?php 
    $file = fopen ("artists_17.txt", "r");
	  while (!feof($file)) {
  		$line = fgets($file);
			print("<a href='artistpage.html'>$line</a>");
		} 
    ?>
  </body>
</html>

