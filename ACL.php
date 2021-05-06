<!DOCTYPE html>

<html lang="en">

  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="ACL.css" rel="stylesheet">
    <script src="main.js"></script>
  </head>

<body>
  <div id="countDown"></div>
  <p id = "con">
  <a href="contact.php">Contact Us</a>
  </p>

  <!-- Navigation Bar -->
  <div class="NaviBar">

<?php
session_start();
if (!isset ($_COOKIE["user"])) {
    print <<<LOGIN
	
<!-- Left Links -->
  <div class="dropdown">
   <button class="dropbtn">Past Line Ups</button>
   <div class="dropdown-content">
        <a href='myacl_login.php'><button>2019</button></a>
	<a href='myacl_login.php'><button>2018</button></a>
	<a href='myacl_login.php'><button>2017</button></a>
	<a href='myacl_login.php'><button>2016</button></a>
	<a href='myacl_login.php'><button>2015</button></a>
	<a href='myacl_login.php'><button>2014</button></a>
   </div>
  </div>

LOGIN;
} else {
   print <<<LOGGEDIN
  <!-- Left Links -->
  <div class="dropdown">
   <button class="dropbtn">Past Line Ups</button>
   <div class="dropdown-content">
     <button onclick=year(this.innerHTML)>2019</button>
     <button onclick=year(this.innerHTML)>2018</button>
     <button onclick=year(this.innerHTML)>2017</button>
     <button onclick=year(this.innerHTML)>2016</button>     
     <button onclick=year(this.innerHTML)>2015</button>
     <button onclick=year(this.innerHTML)>2014</button>    
   </div>
  </div>

LOGGEDIN;
}
?>
    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.php"><img id='logo' src="logo.png"></a>
    </div>

    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="myacl_login.php">MyACL</a>
    </div>

    </div>
    <p id = 'desc'>

  Welcome to the ACL Wayback Machine! Whether you are wishing to relive the magic of ACL 2015 or you couldn’t make it in 2018, this website is for you! Here, you can access previous ACL lineups and watch videos of the performances. Create an account to get quick and easy access to view your all favorite artists' ACL performances in one place! We hope this website allows you to enjoy ACL all year long!
    </p>
    <p style="text-align:center" id = "RegisterText">
        <a class = 'newsletter' href="newsletter.php">Register for our Newsletter here</a>
    </p>
    <img src = "zilker.jpg" alt = "ACL ZILKER PIC">
    
    <p id = 'desc'>
    Taking place at Zilker Park in Austin, TX, ACL Festival has grown to 2 weekends, 8 stages and over 130 bands.
    </p>
    
   
  


  <p id = 'next'>
  ACL 2021 Coming Oct. 1-3 &amp; 8-10, 2021!
  </p>
      
  <p id = 'past'>
    Scroll to the Lineup of the year you would like to go to!
    <br>
  </p>
    
<?php
session_start();
if (!isset ($_COOKIE["user"])) {
    print <<<LOGIN2

    <div class="yearbar"><a href='myacl_login.php'><button>2019</button></a></div>
    <img src ="2019.jpg" alt = "2019 Lineup">

    <div class="yearbar"><a href='myacl_login.php'><button>2018</button></a></div>
    <img src ="2018.jpg" alt = "2018 Lineup">
 
    <div class="yearbar"><a href='myacl_login.php'><button>2017</button></a></div>
    <img src ="2017.jpg" alt = "2017 Lineup">

    <div class="yearbar"><a href='myacl_login.php'><button>2016</button></a></div>
    <img src ="2016.jpg" alt = "2016 Lineup">
	
    <div class="yearbar"><a href='myacl_login.php'><button>2015</button></a></div>
    <img src ="2015.jpg" alt = "2015 Lineup">
 
    <div class="yearbar"><a href='myacl_login.php'><button>2014</button></a></div>
    <img src ="2014.jpg" alt = "2014 Lineup">
LOGIN2;

} else {

print <<<LOGGEDIN2
    
    <div class="yearbar"><button onclick=year(this.innerHTML)>2019</button></div>
    <img src ="2019.jpg" alt = "2019 Lineup">

    <div class="yearbar"><button onclick=year(this.innerHTML)>2018</button></div>
    <img src ="2018.jpg" alt = "2018 Lineup">
 
    <div class="yearbar"><button onclick=year(this.innerHTML)>2017</button></div>
    <img src ="2017.jpg" alt = "2017 Lineup">

    <div class="yearbar"><button onclick=year(this.innerHTML)>2016</button></div>
    <img src ="2016.jpg" alt = "2016 Lineup">
	
    <div class="yearbar"><button onclick=year(this.innerHTML)>2015</button></div>
    <img src ="2015.jpg" alt = "2015 Lineup">
 
    <div class="yearbar"><button onclick=year(this.innerHTML)>2014</button></div>
    <img src ="2014.jpg" alt = "2014 Lineup">

LOGGEDIN2;
}
?>
	
  <form type='hidden' method='POST' action='artists.php' name='theForm'>
    <input type='hidden' id='year' name="year" value=''>
  </form>
  
  <script>
  function year(words){
    console.log(words);
    document.getElementById('year').value = words;
    document.theForm.submit();
  }
  </script>

</body>
</html>
