<!DOCTYPE html>

<html lang="en">

<head>
  <title>AJAX demo</title>
  <meta charset="UTF-8">
  <meta name="description" content="AJAX Edit">
  <meta name="author" content="Pedro Naranjo">
</head> 

   <body>
      
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
            
               queryString +=  "&username=" + username + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
               queryString +=  "&a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&f=" + f;
               queryString +=  "&h=" + h + "&i=" + i + "&j=" + j + "&k=" + k + "&l=" + l + "&g=" + g;
               
               ajaxRequest.open("GET", "editing_schedule.php" + queryString, true);
               ajaxRequest.send(null);
            }

      </script>


		
        <form method = "POST" name = 'myForm'>

      	<h1> Edit My Schedule for ACL Weekend 1 </h1>

        <?php
   
          $server = "spring-2021.cs.utexas.edu";
          $user   = "cs329e_bulko_naranjop";
          $pwd    = "Bumpy9Send!add";
          $dbName = "cs329e_bulko_naranjop";

          $script = $_SERVER['PHP_SELF'];
            # get the incoming information
            $cust_info = $_POST["cust_info"];

            $username = $cust_info["username"];
            $password = $cust_info["password"];


            $a = $cust_info[a];
            $b = $cust_info[b];
            $c = $cust_info[c];
            $d = $cust_info[d];
            $e = $cust_info[e];
            $f = $cust_info[f];
            $g = $cust_info[g];
            $h = $cust_info[h];
            $i = $cust_info[i];
            $j = $cust_info[j];
            $k = $cust_info[k];
            $l = $cust_info[l];

            print <<<PG1
                <table width = "75%">
                    <input type="hidden" name = "username" value=$username>
                    <input type="hidden" name = "password" value=$password>
                        <center>
                        <h2> My Schedule for ACL Weekend 1 </h2>
                        </center>
                        <tr>
                        <td> Time </td>
                        <td> Artist </td>
                        </tr>
                        <tr>
                        <td> Noon-1pm </td>
                        <td> <input type = "text" id = "a" size = "30" /> $a</td>
                        </tr>
                        <tr>
                        <td> 1pm-2pm </td>
                        <td> <input type = "text" id = "b" size = "30" /> $b</td>
                        </tr>
                        <tr>
                        <td> 2pm-3pm </td>
                        <td> <input type = "text" id = "c" size = "30" /> $c</td>
                        </tr>
                        <tr>
                        <td> 3pm-4pm </td>
                        <td> <input type = "text" id = "d" size = "30" /> $d</td>
                        </tr>
                        <tr>
                        <td> 4pm-5pm </td>
                        <td> <input type = "text" id = "e" size = "30" /> $e</td>
                        </tr>
                        <tr>
                        <td> 5pm-6pm </td>
                        <td> <input type = "text" id = "f" size = "30" /> $f</td>
                        </tr>
                        <tr>
                        <td> 6pm-7pm </td>
                        <td> <input type = "text" id = "g" size = "30" /> $g</td>
                        </tr>
                        <tr>
                        <td> 7pm-8pm </td>
                        <td> <input type = "text" id = "h" size = "30" /> $h</td>
                        </tr>
                        <tr>
                        <td> 8pm-9pm </td>
                        <td> <input type = "text" id = "i" size = "30" /> $i</td>
                        </tr>
                        <tr>
                        <td> 9pm-10pm </td>
                        <td> <input type = "text" id = "j" size = "30" /> $j</td>
                        </tr>
                        <tr>
                        <td> 10pm-11pm </td>
                        <td> <input type = "text" id = "k" size = "30" /> $k</td>
                        </tr>
                        <tr>
                        <td> 11pm-Midnight </td>
                        <td> <input type = "text" id = "l" size = "30" /> $l</td>
                        </tr>

                        <input type = "button" onclick = "ajaxFunction('$server','$user','$pwd','$dbName')" value = "Submit"/>
                    </table>
                </form>
                </body>
            </html>
PG1;

        ?>