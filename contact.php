<!DOCTYPE html>

<html lang='en'>

<head>
    <title>Contact Us</title>
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

    </div>
        <br>

        <h2>Meet the ACL Wayback Machine Team!</h2>

        <br>
        <div class = "pictures">
        <p id = "img1">
        <img src="michaelH.jpg" alt="Michael Holzem Photo">
        <b>Michael Holzem</b> <br>
        Michael is from Spring, Texas. He is a senior pursuing an Economics degree at UT Austin.
        </p>

        <p id = "img2">
        <img src="MegH.jpg" alt="Meg Henderson Photo">
        <b>Meg Henderson</b> <br>
            Meg is from Newport Beach, California. She is a senior pursuing a Mathematics degree at UT Austin.
        </p>

        <p id = "img3">
        <img src="jibraanS.jpg" alt="Meg Henderson Photo">
        <b>Jibraan Siddiqi</b> <br>
        Jibraan is from Austin, Texas. He is a senior pursuing a Chemistry degree at UT Austin.
        </p>

        <p id = "img4">
        <img src="pedro.jpg" alt="Pedro Naranjo Photo">
        <b>Pedro Naranjo</b> <br>
        Pedro is from Mexico City, Mexico. He is a senior pursuing a Mechanical Engineering degree at UT Austin.
        </p>
        </div>
        <br>

        <p id = "questions"> We hope that this time machine can help you relive the nostalgia of the festival over the years and the feelings associated with it!
        <br> Have a question or a comment? Please give us a call at <em> 512-123-4567</em> or leave us a message below!
        </p>
   </div>
   <br>

   <div id = "table">
    <table id = "t1">
    <p id = "heading">Contact Us</p>
    <form action = "./contact.php" method = "post" name = "frmContact" id = "frmContact" onsubmit="return validateContactForm()">
    <tr>
            <td> Email: </td>
            <td> <input type = "text" class = "input-field"name = "userEmail" size = "42" id = "userEmail" /> <br>
            <span id = "userEmail-span" class = "span"></td>
    </tr>
    <tr>
            <td> Feedback: </td>
            <td> <textarea name = "comments" class = "input-field" rows = "4" cols = "36" id = "comments"></textarea> <br><span id = "userComments-span" class = "span"></span></td>
    </tr>
    <tr>
    <td></td>
    <td><input type = "submit" value = "Submit" name = "send" id = "btn"/>
    <input type = "reset" value = "Reset" id = "btn"/></td>
    </tr>
    </form>
    </table>
    </p>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".span").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var email = $("#userEmail").val();
            var comments = $("#comments").val();
            
            if (email == "") {
                $("#userEmail-span").css('font-size', '12px');    
                $("#userEmail-span").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-span").css('font-size', '12px');
                $("#userEmail-span").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (comments == "") {
                $("#userComments-span").css('font-size', '12px');
                $("#userComments-span").html("Required.");
                $("#comments").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
       }
    </script>


    </body>

    </html>
