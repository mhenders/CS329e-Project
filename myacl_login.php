<!DOCTYPE html>

<html lang="en">

<head>
  <title>AJAX demo</title>
  <meta charset="UTF-8">
  <meta name="description" content="AJAX Login">
  <meta name="author" content="Pedro Naranjo">
</head> 

   <body>
      
      <script language = "javascript" type = "text/javascript">

            function clear(){
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
                document.getElementById('ajaxDiv').innerHTML = '';
            }

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
               var queryString = "?password=" + password ;
            
               queryString +=  "&username=" + username + "&server=" + server + "&user=" + user + "&pwd=" + pwd + "&dbName=" + dbName;
               
               ajaxRequest.open("GET", "myacl_login2.php" + queryString, true);
               ajaxRequest.send(null);
            }

      </script>


		
      <form method = "POST" name = 'myForm'>

      	<h1> Login to MyACL </h1>

        <?php
   
          $server = "spring-2021.cs.utexas.edu";
          $user   = "cs329e_bulko_naranjop";
          $pwd    = "Bumpy9Send!add";
          $dbName = "cs329e_bulko_naranjop";

   		    echo "<table><tr><td>Username:</td>";
          echo "<td> <input type = 'text' id = 'username' /> </td>";
   		    echo "</tr> <tr>";
          echo "<td>Password:</td>";
   		    echo "<td> <input type = 'text' id = 'password' /> </td>";
   		    echo "</tr> <tr> <td>";
          echo "<input type = \"button\" onclick = \"ajaxFunction('$server','$user','$pwd','$dbName')\" value = \"Submit\"/> <br><br> ";
          echo "<input type = \"reset\" value = \"Reset\" /> <br><br> ";
		      echo "</td> </tr>	</table>";  
        ?>
      </form>
      
      <div id = 'ajaxDiv'></div>
   </body>
</html>