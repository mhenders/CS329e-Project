<?php
  # get the incoming information
  $email = $_POST["email"];
  $comments = $_POST["comments"];


  $file_w = fopen("contact.txt", "a");
  $string1 = $_POST["email"] . ":";
  fwrite($file_w, $string1);
  $string2 = $_POST["comments"] . "\n";
  fwrite($file_w, $string2);
  fclose($file_w);

    print <<<FORM_RESULT
  <html>
  <head>
    <title>Form Submitted</title>
    <meta charset='UTF-8'>
    <meta name='Wayback Machine Contact Us' content='Contact Us'>
    <meta name='author' content='Naranjo, Henderson, Siddiqi, Holzem'>
    <script src="main.js"></script>
    <link href='ACL.css' rel='stylesheet'>
    <link href='contact.css' rel='stylesheet'>
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
        <a class = 'MyACL' href="myacl_login.php">MyACL</a>
      </div>

  </div>
  <br><br>
  <h3> Thank You for Your Input
  <br>
  Click <a href = "ACL.html"> here </a> to return to the home page!</h3>
  </body>
  </html>
FORM_RESULT;

?>
