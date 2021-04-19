<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$script = $_SERVER['PHP_SELF'];

$art = explode("\n", file_get_contents('artists_16.txt'));

print <<<PAGE1
<html>

  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="artists.css" rel="stylesheet">
    <script src="artists.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

  </head>

<body>
  <div id="countDown"></div>
  <p id = "con">
  <a href="contact.html">Contact Us</a>
  </p>


  <!-- Navigation Bar -->
  <div class="NaviBar">
      
    <!-- Left Links -->
   <div class="dropdown">
    <button class="dropbtn">Past Line Ups</button>
    <div class="dropdown-content">
     <a href="artists_19.php"> 2019 </a>
     <a href="artists_18.php"> 2018 </a>
     <a href="artists_17.php"> 2017 </a>
     <a href="artists_16.php"> 2016 </a>
    </div>
   </div>
   
    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.html"><img id='logo' src="logo.png"></a>
    </div>
    
    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="placeholder.html">MyACL</a>
    </div>

   </div>
<h2 id="year">2016</h2>
<div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
<br> <br><br>

PAGE1;

$length = count($art);
for ($x = 0;$x < $length;$x++) {
    $new_id = strval($x + 1);
    print <<<PAGE1
    <button id=$new_id class="artist" onClick="artistPage(this.id);">$art[$x]</button>
PAGE1;
}

print <<<PAGE1
 <p id="name"></p>
 <h3>Video Title</h3>
 <iframe src=""></iframe>
 <p class="description">Video Description<p>


 </body>
 </html>
PAGE1;
?>

