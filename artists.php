<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$script = $_SERVER['PHP_SELF'];
$year = trim($_POST['year']);
$fileYear = 'artists_' .$year. '.txt';
$art = explode("\n", file_get_contents($fileYear));
$art = array_map('strtoupper', $art);
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
  <a href="contact.php">Contact Us</a>
  </p>


  <!-- Navigation Bar -->
  <div class="NaviBar">

  <!-- Left Links -->
  <div class="dropdown">
   <button class="dropbtn">Past Line Ups</button>
  <div class="dropdown-content">
     <button id='dyear'>2019</button>
     <button id='dyear'>2018</button>
     <button id='dyear'>2017</button>
     <button id='dyear'>2016</button>
     <button id='dyear'>2015</button>
     <button id='dyear'>2014</button>
   </div>
  </div>
  <form type='hidden' method='POST' action='artists.php' id='theForm'>
    <input type='hidden' id='year' name="year" value=''>
  </form>
  <script>
  
$(document).ready(function() {
    $(document).on('click', '#dyear', function() {
    $('#year').val($(this).html());
    console.log($('#year').val());
    $("#theForm").submit();
    });
});
</script>


    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.php"><img id='logo' src="logo.png"></a>
    </div>

    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="myacl_login.php">MyACL</a>
      
    </div>

    </div>

<h2 id="year">$year</h2>
<div class="search-container">
      <input type="text" placeholder="Search.." id="search">
      <button onclick=searchBar(document.getElementById('search').value)>Submit</button>
  </div>
<br><br><br>
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
 <div class = "vid">
    <iframe src=""></iframe>
 </div>
 <p><b> Video Description </b></p>
 <p class="description">Video description goes here.</p>

 </body>
 </html>
PAGE1;
?>

