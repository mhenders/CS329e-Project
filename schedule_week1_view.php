<?php
$script = $_SERVER['PHP_SELF'];
# get the incoming information
$cust_info = $_POST["cust_info"];
$a = $cust_info[a];
$b = $cust_info[b];
$c = $cust_info[c];
$d = $cust_info[d];
$e = $cust_info[e];
$f = $cust_info[f];
$g = $cust_info[g];
$h = $cust_info[h];
$i = $cust_info[i];
$j = $cust_info[j];
$k = $cust_info[k];
$l = $cust_info[l];

print <<<PG1
<html>
    <body>
    <table width = "75%">
        <form action = "./schedule_week1_edit.php" method = "post">
            <input type="hidden" name = "cust_info" value=$cust_info>
            <center>
            <h2> My Schedule for ACL Weekend 1 </h2>
            </center>
            <tr>
            <td> Time </td>
            <td> Artist </td>
            </tr>
            <tr>
            <td> Noon-1pm </td>
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