<?php
$script = $_SERVER['PHP_SELF'];

print <<<PAGE1
    <html>
    <head>
    <title> Sign Up Sheet </title>
    </head>
    <body>
    <h3> Sign Up Sheet </h3>
    <form method = "post" action = "$script">
    <table cellspacing='0' cellpadding='0'>
    <tr>
        <td><label for='time'>8:00 am</label></td>
PAGE1;

if ($_POST["ent1"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent1'></td>
PAGE1;
}else{
    $ent1 = $_POST["ent1"];
    print <<<PAGE1
        <td><label for='name'>$ent1</label></td>
        <input type = "hidden" name = "ent1" value = "$ent1" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>9:00 am</label></td>
PAGE1;

if ($_POST["ent2"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent2'></td>
PAGE1;
}else{
    $ent2 = $_POST["ent2"];
    print <<<PAGE1
        <td><label for='name'>$ent2</label></td>
        <input type = "hidden" name = "ent2" value = "$ent2" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>10:00 am</label></td>
PAGE1;

if ($_POST["ent3"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent3'></td>
PAGE1;
}else{
    $ent3 = $_POST["ent3"];
    print <<<PAGE1
        <td><label for='name'>$ent3</label></td>
        <input type = "hidden" name = "ent3" value = "$ent3" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>11:00 am</label></td>
PAGE1;

if ($_POST["ent4"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent4'></td>
PAGE1;
}else{
    $ent4 = $_POST["ent4"];
    print <<<PAGE1
        <td><label for='name'>$ent4</label></td>
        <input type = "hidden" name = "ent4" value = "$ent4" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>12:00 pm</label></td>
PAGE1;

if ($_POST["ent5"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent5'></td>
PAGE1;
}else{
    $ent5 = $_POST["ent5"];
    print <<<PAGE1
        <td><label for='name'>$ent5</label></td>
        <input type = "hidden" name = "ent5" value = "$ent5" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>1:00 pm</label></td>
PAGE1;

if ($_POST["ent6"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent6'></td>
PAGE1;
}else{
    $ent6 = $_POST["ent6"];
    print <<<PAGE1
        <td><label for='name'>$ent6</label></td>
        <input type = "hidden" name = "ent6" value = "$ent6" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>2:00 pm</label></td>
PAGE1;

if ($_POST["ent7"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent7'></td>
PAGE1;
}else{
    $ent7 = $_POST["ent7"];
    print <<<PAGE1
        <td><label for='name'>$ent7</label></td>
        <input type = "hidden" name = "ent7" value = "$ent7" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>3:00 pm</label></td>
PAGE1;

if ($_POST["ent8"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent8'></td>
PAGE1;
}else{
    $ent8 = $_POST["ent8"];
    print <<<PAGE1
        <td><label for='name'>$ent8</label></td>
        <input type = "hidden" name = "ent8" value = "$ent8" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>4:00 pm</label></td>
PAGE1;

if ($_POST["ent9"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent9'></td>
PAGE1;
}else{
    $ent9 = $_POST["ent9"];
    print <<<PAGE1
        <td><label for='name'>$ent9</label></td>
        <input type = "hidden" name = "ent9" value = "$ent9" />
PAGE1;
}

print <<<PAGE1
</tr>
<tr>
<td><label for='time'>5:00 pm</label></td>
PAGE1;

if ($_POST["ent10"] == NULL) {
    print <<<PAGE1
        <td><input type='text' name='ent10'></td>
PAGE1;
}else{
    $ent10 = $_POST["ent10"];
    print <<<PAGE1
        <td><label for='name'>$ent10</label></td>
        <input type = "hidden" name = "ent10" value = "$ent10" />
PAGE1;
}

print <<<PAGE1
</tr>
</table>
<p>
  <input type = "submit" value = "Submit" />
</p>
</form>
</body>
</html>
PAGE1;

?>