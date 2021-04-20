<?php
  $script = $_SERVER['PHP_SELF'];
  # get the incoming information
  $us1 = $_POST["username1"];
  $ps1 = $_POST["password1"];
  $us2 = $_POST["username2"];
  $ps2 = $_POST["password2"];

  if (isset ($_COOKIE["user"])){
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
    <h1> Load Schedule for User Here </h1>
    </body>
    </html>
PAGE1;
    }else if($us2 != ''){
    $file = fopen("users.txt","r");
    $suc_login = true;
    while(! feof($file))
      {
        $arr = explode(" ",fgets($file));
        if($us2 == $arr[0]){
            $suc_login = false;
            print <<<PG1
<html>
<script>
alert("Username already being used, please chose a different username")
</script>
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
<center>
<h2> Create a MyACL Account </h2>
</center>
<table width = "75%">
<form method = "post" action = "$script">
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
PG1;
    break;
        }
      }
    fclose($file);

    if($suc_login){
        $fp = fopen('users.txt', 'a'); //opens file in append mode  
        fwrite($fp, $us2." ".$ps2."\n"); 
        fclose($fp);

        setcookie("user", "account", time() + (1800), "/"); // assign cookie

        # Write thank you page
        print <<<REGISTRATION_RESULT
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
        <h1> Thank You for Registering! </h1>
        <table width = "75%">
        <form method = "post" action = "$script">
        <tr>
        <td><input type = "submit" value = "Ok" /></td>
        </tr>
        </form>
        </table>
        </body>
        </html>
REGISTRATION_RESULT;
    }

  }else{
    $file = file_get_contents("users.txt");
    $lines = explode("\n", $file);
    $suc_login = false;
    for($x = 0; $x < count($lines); $x++) {
        $line = $lines[$x];
        $arr = explode(" ", $line);
        
        if($us1 == $arr[0] && $ps1 == $arr[1]){
            $suc_login = true;
            setcookie("user", "account", time() + (1800), "/"); // assign cookie
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
    <h1> Load Schedule for User Here </h1>
    </body>
    </html>
PAGE1;

            break;
        }
    }

    if(! $suc_login){
        print <<<PG1
        <html>
        <script>
        alert("Unsuccessfull login, please try again or create an account")
        </script>
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

    <center>
    <h2> MyACL Log In </h2>
    </center>
    <table width = "75%">
    <form action = "$script" method = "post">
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
    <form action = "$script" method = "post">
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
PG1;
    }
  }
?>