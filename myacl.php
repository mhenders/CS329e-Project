<?php
  if (isset ($_COOKIE["user"]))
  {
print <<<PAGE1
<html>
<head>
<h1> Load schedule for user here. </h1>
</head>
<body>
</body>
</html>
PAGE1;
  }
  else
  {
print <<<PAGE1
<html>
<head>
<title> MyACL Log In </title>
</head>
<body>
<center>
<h2> MyACL Log In </h2>
</center>
<table width = "75%">
<form action = "./myacl2.php" method = "post">
<tr>
<td> Enter username </td>
<td> <input type = "text" name = "username1" size = "30" /></td>
</tr>
<tr>
<td> Enter password </td>
<td> <input type = "text" name = "password1" size = "30" /></td>
</tr>
<center>
<tr>
<td colspan='2' class='subheading'>New to MyACL? Create an account!</td>
</tr>
</center>
<tr>
<td> &nbsp; </td> <td> &nbsp; </td>
</tr>
<tr>
<td> Create a username </td>
<td> <input type = "text" name = "username2" size = "30" /></td>
</tr>
<tr>
<td> Create a password </td>
<td> <input type = "text" name = "password2" size = "30" /></td>
</tr>
<tr>
<td><input type = "submit" value = "Submit" /></td>
<td><input type = "reset" value = "Reset" /></td>
</tr>
</form>
</table>
</body>
</html>
PAGE1;
  }
?>