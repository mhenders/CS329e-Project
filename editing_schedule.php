<?php
   //error_reporting(E_ALL);
   //ini_set("display_errors", "on");
//echo "hey1";
 //  require 'myacl_login2.php';

   echo "hello";
   $server = $_GET["server"];
   $user   = $_GET["user"];
   $pwd    = $_GET["pwd"];
   $dbName = $_GET["dbName"];

   // Connect to MySQL Server
  $mysqli2 = new mysqli($server, $user, $pwd, $user);
  echo "yes";

   //if ($mysqli2->connect_errno) {
  //    die('Connect Error: ' . $mysqli2->connect_errno . ": " .  $mysqli2->connect_error);
  // } else {
  // }
//echo "here";

echo $server;
echo $pwd;
echo $user;
//Select Database
$mysqli2->select_db($user) or die('Connect Error: ' . $mysqli2->error);


echo "heyyy";

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

    echo "hello";
    echo "nono". $a;

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
?>
   