<?php
  if (isset ($_COOKIE["user"]))
  {
print <<<PAGE1
<html>
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
  <a href="contact.html">Contact Us</a>
  </p>

  <!-- Navigation Bar -->
  <div class="NaviBar">

  <!-- Left Links -->
  <div class="dropdown">
   <button class="dropbtn">Past Line Ups</button>
   <div class="dropdown-content">
     <button onclick=year(this.innerHTML)>2019</button>
     <button onclick=year(this.innerHTML)>2018</button>
     <button onclick=year(this.innerHTML)>2017</button>
     <button onclick=year(this.innerHTML)>2016</button>
   </div>
  </div>
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

    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.html"><img id='logo' src="logo.png"></a>
    </div>

    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="myacl.php">MyACL</a>
      <a class = 'newsletter' href="newsletter.php">Newsletter</a>
    </div>

    </div>
</head>
<h2> Load Schedule for User Here </h2>
</body>
</html>
PAGE1;
  }
  else
  {
print <<<PAGE1
<html>
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
  <a href="contact.html">Contact Us</a>
  </p>

  <!-- Navigation Bar -->
  <div class="NaviBar">

  <!-- Left Links -->
  <div class="dropdown">
   <button class="dropbtn">Past Line Ups</button>
   <div class="dropdown-content">
     <button onclick=year(this.innerHTML)>2019</button>
     <button onclick=year(this.innerHTML)>2018</button>
     <button onclick=year(this.innerHTML)>2017</button>
     <button onclick=year(this.innerHTML)>2016</button>
   </div>
  </div>
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

    <!-- Centered logo -->
    <div class="NaviBar-logo">
      <a href="ACL.php"><img id='logo' src="logo.png"></a>
    </div>

    <!-- Right Links -->
    <div class="NaviBar-right">
      <a class = 'MyACL' href="myacl.php">MyACL</a>
      <a class = 'newsletter' href="newsletter.php">Newsletter</a>
    </div>

    </div>
<center>
<h2> MyACL Log In </h2>
</center>
<table width = "75%">
<form action = "./myacl2.php" method = "post">
<tr>
<td> Enter username </td>
<td> <input type = "text" name = "username1" size = "30" /></td>
</tr>
<tr>
<td> Enter password </td>
<td> <input type = "text" name = "password1" size = "30" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Submit" /></td>
<td><input type = "reset" value = "Reset" /></td>
</tr>
</form>
</table>
<center>
<h2> New to MyACL? Create an Account! </h2>
</center>
<table width = "75%">
<form action = "./myacl2.php" method = "post">
<tr>
<td> Create a username </td>
<td> <input type = "text" name = "username2" size = "30" /></td>
</tr>
<tr>
<td> Create a password </td>
<td> <input type = "text" name = "password2" size = "30" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Submit" /></td>
<td><input type = "reset" value = "Reset" /></td>
</tr>
</form>
</table>
</body>
</html>
PAGE1;
  }
?>
