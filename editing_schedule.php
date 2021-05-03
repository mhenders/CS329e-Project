<?php
   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];

   // Connect to MySQL Server
  $mysqli2 = new mysqli($server, $user, $pwd, $user);
//Select Database
$mysqli2->select_db($user) or die('Connect Error: ' . $mysqli2->error);

// Retrieve data from Query String
$username = $_GET['username'];
$password = $_GET['password'];

// Escape User Input to help prevent SQL Injection
///$username = $mysqli2->real_escape_string($username);
//$password = $mysqli2->real_escape_string($password);

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

    //build query
    $query = "UPDATE acl SET a = '$a' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET b = '$b' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET c = '$c' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET d = '$d' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET e = '$e' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET f = '$f' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET g = '$g' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET h = '$h' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET i = '$i' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET j = '$j' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET k = '$k' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);

    //build query
    $query = "UPDATE acl SET l = '$l' WHERE username = '$username'";

    //Execute query
    $result = $mysqli2->query($query) or die($mysqli2->error);


    echo "Changes made";
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
    echo "<input type = \"submit\" value = \"See New Schedule\" />";
    echo "</form>";
?>
   