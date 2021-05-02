<?php
   //error_reporting(E_ALL);
   //ini_set("display_errors", "on");
   
   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];

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
   $query = "SELECT * FROM acl WHERE username = '$username' AND password = '$password'";

   $query2 = "SELECT * FROM acl WHERE username = '$username'";

   //Execute query
   $result = $mysqli->query($query) or die($mysqli->error);

   $row = $result->fetch_array(MYSQLI_ASSOC); // should only return a single row

   $result2 = $mysqli->query($query2) or die($mysqli->error);

   $row2 = $result2->fetch_array(MYSQLI_ASSOC); // should only return a single row

   if($row[username] != Null && $row[password] != Null){
    echo "User and password confirmed";
    echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
    echo "<input type=\"hidden\" name = \"cust_info\"  value=$row>";
    echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
    echo "</form>";
   }else if($row2[username] != Null){
       //build query
       $query = "UPDATE acl SET password = '$password' WHERE username = '$username'";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       echo "Password changed";
       echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
       echo "<input type=\"hidden\" name = \"cust_info\" value=$row2>";
       echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
       echo "</form>";
   }else{
       //build query
       $query = "INSERT INTO acl (username, password) VALUES ('$username', '$password')";

       //Execute query
       $result = $mysqli->query($query) or die($mysqli->error);

       $query = "SELECT * FROM acl WHERE username = '$username'";

        //Execute query
        $result = $mysqli->query($query) or die($mysqli->error);

        $row = $result->fetch_array(MYSQLI_ASSOC); // should only return a single row

       echo "New User Registered"; 
       echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
       echo "<input type=\"hidden\" name = \"cust_info\" value=$row>";
       echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
       echo "</form>";
   }
?>