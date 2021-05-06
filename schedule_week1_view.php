<!DOCTYPE html>

<html lang="en">

  <head>
    <title>ACL Wayback Machine</title>
    <meta charset="UTF-8">
    <meta name="description" content="ACL Wayback Machine">
    <meta name="author" content="Michael Holzem, Meg Henderson, Pedro Naranjo, Jibraan Siddiqi">
    <link href="ACL.css" rel="stylesheet">
    <script src="main.js"></script>
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
        <a href='myacl.php'><button>2019</button></a>
	<a href='myacl.php'><button>2018</button></a>
	<a href='myacl.php'><button>2017</button></a>
	<a href='myacl.php'><button>2016</button></a>
	<a href='myacl.php'><button>2015</button></a>
	<a href='myacl.php'><button>2014</button></a>
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
      <a class = 'newsletter' href="newsletter.php">Newsletter</a>
    </div>

    </div>

<?php
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

print <<<PG1
    <table width = "75%">
        <form action = "./schedule_week1_edit.php" method = "post">
            <input type="hidden" name = "a" value=$a>
            <input type="hidden" name = "b" value=$b>
            <input type="hidden" name = "c" value=$c>
            <input type="hidden" name = "d" value=$d>
            <input type="hidden" name = "e" value=$e>
            <input type="hidden" name = "f" value=$f>
            <input type="hidden" name = "g" value=$g>
            <input type="hidden" name = "h" value=$h>
            <input type="hidden" name = "i" value=$i>
            <input type="hidden" name = "j" value=$j>
            <input type="hidden" name = "k" value=$k>
            <input type="hidden" name = "l" value=$l>
            <input type="hidden" name = "username" value=$username>
            <input type="hidden" name = "password" value=$password>
            <center>
            <h2> My Schedule for ACL Weekend 1 </h2>
            </center>
            <tr>
            <td><strong> Time</strong> </td>
            <td> <strong>Artist</strong> </td>
            </tr>
            <tr>
            <td> Friday Week 1: Noon-5pm </td>
PG1;
        if($a == Null){
            $a = '';
        }
        if($b == Null){
            $b = '';
        }
        if($c == Null){
            $c = '';
        }
        if($d == Null){
            $d = '';
        }
        if($e == Null){
            $e = '';
        }
        if($f == Null){
            $f = '';
        }
        if($g == Null){
            $g = '';
        }
        if($h == Null){
            $h = '';
        }
        if($i == Null){
            $i = '';
        }
        if($j == Null){
            $j = '';
        }
        if($k == Null){
            $k = '';
        }
        if($l == Null){
            $l = '';
        }
print <<<PG1
            <td> $a </td>
            </tr>
            <tr>
            <td> Friday Week 1: 5pm-Midnight </td>
            <td> $b </td>
            </tr>
            <tr>
            <td> Saturday Week 1: Noon-5pm </td>
            <td> $c </td>
            </tr>
            <tr>
            <td> Saturday Week 1: 5pm-Midnight </td>
            <td> $d </td>
            </tr>
            <tr>
            <td> Sunday Week 1: Noon-5pm </td>
            <td> $e </td>
            </tr>
            <tr>
            <td> Sunday Week 1: 5pm-Midnight </td>
            <td> $f </td>
            </tr>
            <tr>
            <td> Friday Week 2: Noon-5pm </td>
            <td> $g </td>
            </tr>
            <tr>
            <td> Friday Week 2: 5pm-Midnight </td>
            <td> $h </td>
            </tr>
            <tr>
            <td> Saturday Week 2: Noon-5pm </td>
            <td> $i </td>
            </tr>
            <tr>
            <td> Saturday Week 2: 5pm-Midnight </td>
            <td> $j </td>
            </tr>
            <tr>
            <td> Sunday Week 2: Noon-5pm </td>
            <td> $k </td>
            </tr>
            <tr>
            <td> Sunday Week 2: 5pm-Midnight </td>
            <td> $l </td>
            </tr>

            <tr>
            <td><input type = "submit" value = "Edit Schedule" /></td>
            </tr>
        </form>
    </table>
    </body>
    </html>
PG1;
?>
