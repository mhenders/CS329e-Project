<!DOCTYPE html>

<html lang="en">

<head>
  <title>AJAX demo</title>
  <meta charset="UTF-8">
  <meta id="description" content="AJAX Edit">
  <meta id="author" content="Pedro Naranjo">
</head> 

   <body>
      
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
            echo "<tr><td> Time </td><td> Artist </td></tr>";
            echo "<tr><td> Noon-1pm </td><td><input type=\"text\" id = \"a\" value=$a></td></tr>";
            echo "<tr><td> 1pm-2pm </td><td><input type=\"text\" id = \"b\" value=$b></td></tr>";
            echo "<tr><td> 2pm-3pm </td><td><input type=\"text\" id = \"c\" value=$c></td></tr>";
            echo "<tr><td> 3pm-4pm </td><td><input type=\"text\" id = \"d\" value=$d></td></tr>";
            echo "<tr><td> 4pm-5pm </td><td><input type=\"text\" id = \"e\" value=$e></td></tr>";
            echo "<tr><td> 5pm-6pm </td><td><input type=\"text\" id = \"f\" value=$f></td></tr>";
            echo "<tr><td> 6pm-7pm </td><td><input type=\"text\" id = \"g\" value=$g></td></tr>";
            echo "<tr><td> 7pm-8pm </td><td><input type=\"text\" id = \"h\" value=$h></td></tr>";
            echo "<tr><td> 8pm-9pm </td><td><input type=\"text\" id = \"i\" value=$i></td></tr>";
            echo "<tr><td> 9pm-10pm </td><td><input type=\"text\" id = \"j\" value=$j></td></tr>";
            echo "<tr><td> 10pm-11pm </td><td><input type=\"text\" id = \"k\" value=$k></td></tr>";
            echo "<tr><td> 11pm-Midnight </td><td><input type=\"text\" id = \"l\" value=$l></td></tr>";
            echo "<input type = \"button\" onclick = \"ajaxFunction('$server','$user','$pwd','$dbname')\" value = \"Submit\"/> <br><br> ";
            echo "</table></form>";


        ?>

    <div id = 'ajaxDiv'></div>
                </body>
            </html>