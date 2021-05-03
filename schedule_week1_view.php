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
<html>
    <body>
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
            <td> Time </td>
            <td> Artist </td>
            </tr>
            <tr>
            <td> Noon-1pm </td>
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
            <td> 1pm-2pm </td>
            <td> $b </td>
            </tr>
            <tr>
            <td> 2pm-3pm </td>
            <td> $c </td>
            </tr>
            <tr>
            <td> 3pm-4pm </td>
            <td> $d </td>
            </tr>
            <tr>
            <td> 4pm-5pm </td>
            <td> $e </td>
            </tr>
            <tr>
            <td> 5pm-6pm </td>
            <td> $f </td>
            </tr>
            <tr>
            <td> 6pm-7pm </td>
            <td> $g </td>
            </tr>
            <tr>
            <td> 7pm-8pm </td>
            <td> $h </td>
            </tr>
            <tr>
            <td> 8pm-9pm </td>
            <td> $i </td>
            </tr>
            <tr>
            <td> 9pm-10pm </td>
            <td> $j </td>
            </tr>
            <tr>
            <td> 10pm-11pm </td>
            <td> $k </td>
            </tr>
            <tr>
            <td> 11pm-Midnight </td>
            <td> $l </td>
            </tr>

            <tr>
            <td><input type = "submit" value = "Edit Schedule" /></td>
            </tr>
        </form>
    </table>
    </body>
PG1;
?>