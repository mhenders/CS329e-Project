<?php
   //error_reporting(E_ALL);
   //ini_set("display_errors", "on");
   
   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];
   $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    $d = $_GET["d"];
    $e = $_GET["e"];
    $f = $_GET["f"];
    $g = $_GET["g"];
    $h = $_GET["h"];
    $i = $_GET["i"];
    $j = $_GET["j"];
    $k = $_GET["k"];
    $l = $_GET["l"];



   // Connect to MySQL Server

   $mysqli = new mysqli($server, $user, $pwd, $dbName);

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   } else {
   }
  
   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);
   
   // Retrieve data from Query String
   $username = $_GET['username'];
   $password = $_GET['password'];
   
   // Escape User Input to help prevent SQL Injection
   $username = $mysqli->real_escape_string($username);
   $password = $mysqli->real_escape_string($password);

       //build query
       $query = "UPDATE acl SET a = '$a' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET b = '$b' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET c = '$c' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET d = '$d' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET e = '$e' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET f = '$f' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET g = '$g' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET h = '$h' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET i = '$i' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET j = '$j' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET k = '$k' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       //build query
       $query = "UPDATE acl SET l = '$l' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       // Get new user info

        $query = "SELECT * FROM acl WHERE username = '$username'";

        //Execute query
        $result = $mysqli->query($query) or die($mysqli->error);

        $row = $result->fetch_array(MYSQLI_ASSOC); // should only return a single row

       echo "Changes made";
       echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
       echo "<input type=\"hidden\" name = \"cust_info\" value=$row>";
       echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
       echo "</form>";
?>