<?php
  if (isset($_POST["submit"])){
	confirmPage();
  } else {
	register();
  }

function register(){
  $script = $_SERVER['PHP_SELF'];
  print <<<TOP
  <html lang="en">
  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="newsletter.css" rel="stylesheet">
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
      <a class = 'newsletter' href="newsletter.php">Newsletter</a>
    </div>

  </div>

  <h1> Join our newsletter! </h1>
  <h3> Stay up to date on the latest ACL news! We will alert you festival announcements, artists' new music, and more! </h3>
  <form action = "$script" method = "post">
    <table>
      <tr><td>Name:</td><td><input type = "text" name = "name"></td></tr>
      <tr><td>Email:</td><td><input type = "text" name = "email"></td></tr>
      <tr><td> <input type = "reset" id = "btn" value = "Clear" /> </td>
          <td> <input type = "submit" id = "btn" value = "Sign Up" name="submit"/> </td>
          <td> &nbsp; </td> <td> &nbsp; </td>
        </tr>
    </table>
  </form>
</body>
</html>
TOP;
}

function confirmPage(){
  # get the incoming information
  $name = $_POST["name"];
  $email = $_POST["email"];
  setcookie ("name", $name, time()+3600);

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
  <h1> Thank You for Signing Up $name!</h1>
  </body>
  </html>
RESULT;
}
?>
