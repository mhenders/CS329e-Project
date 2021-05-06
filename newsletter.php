
<!DOCTYPE html>

<html lang="en">

<head>
<title>ACL Wayback Machine</title>
<meta charset="UTF-8">
<meta name="description" content="ACL Wayback Machine">
<meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
<script src="main.js"></script>
<link href="ACL.css" rel="stylesheet">
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
      
      <script language = "javascript" type = "text/javascript">

            //Browser Support Code
            function ajaxFunction(server,user,pwd,dbName){
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
                // Now get the value from user and pass it to server script.
                var Email = document.getElementById('Email').value;
                
                var queryString = "?Email=" + Email + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
                
                ajaxRequest.open("GET", "newsletterForm.php" + queryString, true);
               ajaxRequest.send(null);
            }

      </script>


        
      <form method = "POST" name = 'myForm'>

        <?php
   
            $server = "spring-2021.cs.utexas.edu";
            $user = "cs329e_bulko_mholzem";
            $pwd = 'attend$dare$Dough';
            $dbName = "cs329e_bulko_mholzem";

               echo "<h1> Join Our Newsletter </h1>";
               echo "<h3> Stay up to date on the latest ACL news! We will alert you festival announcements, artists new music, and more! </h3>";
               echo "<table><tr><td>Email:</td>";
          echo "<td> <input type = 'text' id = 'Email' /> </td>";
               echo "</tr> <tr>";
          
               echo "</tr> <tr> <td>";
          echo "<input type = \"button\" onclick = \"ajaxFunction('$server','$user','$pwd','$dbName')\" value = \"Submit\"/>";
          echo "<input type = \"reset\"  value = \"Reset\"/> <br><br> ";
              echo "</td> </tr>    </table>";
        ?>
      </form>
      
      <div id = 'ajaxDiv'></div>
   </body>
</html>


