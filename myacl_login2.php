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

    $a = $row[a];
    $b = $row[b];
    $c = $row[c];
    $d = $row[d];
    $e = $row[e];
    $f = $row[f];
    $g = $row[g];
    $h = $row[h];
    $i = $row[i];
    $j = $row[j];
    $k = $row[k];
    $l = $row[l];

    setcookie("user", $username, time() + (900), "/"); // 86400 = 1 day


   if($row[username] != Null && $row[password] != Null){
    echo "Successfully logged in";
    echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
    echo "<input type=\"hidden\" name = \"username\" value=$username>";
       echo "<input type=\"hidden\" name = \"password\" value=$password>";
       echo "<input type=\"hidden\" name = \"a\" value=$a>";
       echo "<input type=\"hidden\" name = \"b\" value=$b>";
       echo "<input type=\"hidden\" name = \"c\" value=$c>";
       echo "<input type=\"hidden\" name = \"d\" value=$d>";
       echo "<input type=\"hidden\" name = \"e\" value=$e>";
       echo "<input type=\"hidden\" name = \"f\" value=$f>";
       echo "<input type=\"hidden\" name = \"g\" value=$g>";
       echo "<input type=\"hidden\" name = \"h\" value=$h>";
       echo "<input type=\"hidden\" name = \"i\" value=$i>";
       echo "<input type=\"hidden\" name = \"j\" value=$j>";
       echo "<input type=\"hidden\" name = \"k\" value=$k>";
       echo "<input type=\"hidden\" name = \"l\" value=$l>";
    echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
    echo "</form>";
   }else if($row2[username] != Null){
       echo "This username is already being used with a different password. Please chose a diferent username or try again";
       echo "<form action = \"myacl_login.php\" method = \"post\">";
       echo "<input type = \"submit\" value = \"Okay\" />";
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

        $username = $row[username];
        $password = $row[password];
        $a = $row[a];
        $b = $row[b];
        $c = $row[c];
        $d = $row[d];
        $e = $row[e];
        $f = $row[f];
        $g = $row[g];
        $h = $row[h];
        $i = $row[i];
        $j = $row[j];
        $k = $row[k];
        $l = $row[l];

       echo "New User Registered"; 
       echo "<form action = \"./schedule_week1_view.php\" method = \"post\">";
       echo "<input type=\"hidden\" name = \"username\" value=$username>";
       echo "<input type=\"hidden\" name = \"password\" value=$password>";
       echo "<input type=\"hidden\" name = \"a\" value=$a>";
       echo "<input type=\"hidden\" name = \"b\" value=$b>";
       echo "<input type=\"hidden\" name = \"c\" value=$c>";
       echo "<input type=\"hidden\" name = \"d\" value=$d>";
       echo "<input type=\"hidden\" name = \"e\" value=$e>";
       echo "<input type=\"hidden\" name = \"f\" value=$f>";
       echo "<input type=\"hidden\" name = \"g\" value=$g>";
       echo "<input type=\"hidden\" name = \"h\" value=$h>";
       echo "<input type=\"hidden\" name = \"i\" value=$i>";
       echo "<input type=\"hidden\" name = \"j\" value=$j>";
       echo "<input type=\"hidden\" name = \"k\" value=$k>";
       echo "<input type=\"hidden\" name = \"l\" value=$l>";
       echo "<input type = \"submit\" value = \"Take me to my schedule\" />";
       echo "</form>";
   }
?>
