
<?php

   error_reporting(E_ALL);
   ini_set("display_errors", "on");
   
   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];

   // Connect to MySQL Server

   $mysqli = new mysqli($server, $user, $pwd, $dbName);

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   }
  
   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);
   
   // Retrieve data from Query String
   $Email = $_GET['Email'];
   
   
   // Escape User Input to help prevent SQL Injection
   $Email = $mysqli->real_escape_string($Email);
   
   //build query
   $query = "SELECT email FROM aclEmail WHERE email = '$Email'";

   //Execute query
   $result = $mysqli->query($query) or die($mysqli->error);

   $row = $result->fetch_array(MYSQLI_ASSOC);

   if ($row["email"] == $Email){
       echo "You're already registered!";
       
   } elseif($row["email"] != $Email) {
       $query = "INSERT INTO aclEmail VALUES('$Email')";
    
       $result = $mysqli->query($query) or die($mysqli->error);
    
       echo "Awesome! You're now registered!";
   }

?>
