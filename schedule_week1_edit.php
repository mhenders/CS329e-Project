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
        <a href='myacl.php'><button>2019</button></a>
	<a href='myacl.php'><button>2018</button></a>
	<a href='myacl.php'><button>2017</button></a>
	<a href='myacl.php'><button>2016</button></a>
	<a href='myacl.php'><button>2015</button></a>
	<a href='myacl.php'><button>2014</button></a>
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
      <a class = 'newsletter' href="newsletter.php">Newsletter</a>
    </div>

    </div>
      
      <script language = "javascript" type = "text/javascript">


            //Browser Support Code
            function ajaxFunction(server,user,pwd,dbname){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               ajaxRequest = new XMLHttpRequest();
               
               // Create a function that will receive data sent from the server and will update
               // the div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDiv');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to server script.
					
               var username = document.getElementById('username').value;
               var password = document.getElementById('password').value;
               var a = document.getElementById('a').value;
               var b = document.getElementById('b').value;
               var c = document.getElementById('c').value;
               var d = document.getElementById('d').value;
               var e = document.getElementById('e').value;
               var f = document.getElementById('f').value;
               var g = document.getElementById('g').value;
               var h = document.getElementById('h').value;
               var i = document.getElementById('i').value;
               var j = document.getElementById('j').value;
               var k = document.getElementById('k').value;
               var l = document.getElementById('l').value;
               var queryString = "?password=" + password ;
            
               queryString +=  "&username=" + username + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbname=" + dbname;
               queryString +=  "&a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&f=" + f;
               queryString +=  "&h=" + h + "&i=" + i + "&j=" + j + "&k=" + k + "&l=" + l + "&g=" + g;
               
               ajaxRequest.open("GET", "editing_schedule.php" + queryString, true);
               ajaxRequest.send(null);
            }

      </script>


		
        <form method = "POST" id = 'myForm2'>

      	<h1> Edit My Schedule for ACL Weekend 1 </h1>

        <?php
   
          $server = "spring-2021.cs.utexas.edu";
          $user   = "cs329e_bulko_naranjop";
          $pwd    = "Bumpy9Send!add";
          $dbname = "cs329e_bulko_naranjop";

          $script = $_SERVER['PHP_SELF'];
            # get the incoming information
            $username = $_POST["username"];
            $password = $_POST["password"];
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $d = $_POST["d"];
            $e = $_POST["e"];
            $f = $_POST["f"];
            $g = $_POST["g"];
            $h = $_POST["h"];
            $i = $_POST["i"];
            $j = $_POST["j"];
            $k = $_POST["k"];
            $l = $_POST["l"];

            echo"<table><input type=\"hidden\" id = \"username\" value=$username>";
            echo "<input type=\"hidden\" id = \"password\" value=$password>";
            echo "<tr><td><strong> Time </strong></td><td><strong> Artist </strong></td></tr>";
            echo "<tr><td> Friday Week 1: Noon-5pm </td><td><input type=\"text\" id = \"a\" value=$a></td></tr>";
            echo "<tr><td> Friday Week 1: 5pm-Midnight </td><td><input type=\"text\" id = \"b\" value=$b></td></tr>";
            echo "<tr><td> Saturday Week 1: Noon-5pm </td><td><input type=\"text\" id = \"c\" value=$c></td></tr>";
            echo "<tr><td> Saturday Week 1: 5pm-Midnight </td><td><input type=\"text\" id = \"d\" value=$d></td></tr>";
            echo "<tr><td> Sunday Week 1: Noon-5pm </td><td><input type=\"text\" id = \"e\" value=$e></td></tr>";
            echo "<tr><td> Sunday Week 1: 5pm-Midnight </td><td><input type=\"text\" id = \"f\" value=$f></td></tr>";
            echo "<tr><td> Friday Week 2: Noon-5pm </td><td><input type=\"text\" id = \"g\" value=$g></td></tr>";
            echo "<tr><td> Friday Week 2: 5pm-Midnight </td><td><input type=\"text\" id = \"h\" value=$h></td></tr>";
            echo "<tr><td> Saturday Week 2: Noon-5pm </td><td><input type=\"text\" id = \"i\" value=$i></td></tr>";
            echo "<tr><td> Saturday Week 2: 5pm-Midnight </td><td><input type=\"text\" id = \"j\" value=$j></td></tr>";
            echo "<tr><td> Sunday Week 2: Noon-5pm </td><td><input type=\"text\" id = \"k\" value=$k></td></tr>";
            echo "<tr><td> Sunday Week 2: 5pm-Midnight </td><td><input type=\"text\" id = \"l\" value=$l></td></tr>";
            echo "<input type = \"button\" onclick = \"ajaxFunction('$server','$user','$pwd','$dbname')\" value = \"Submit\"/> <br><br> ";
            echo "</table></form>";


        ?>

    <div id = 'ajaxDiv'></div>
                </body>
            </html>
