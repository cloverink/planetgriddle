<?php
function G($var, $else="") {return isset($_GET[$var])?      $_GET[$var]       : "$else";}
function P($var, $else="") {return isset($_POST[$var])?     $_POST[$var]      : "$else";}
function S($var, $else="") {return isset($_SESSION[$var])?  $_SESSION[$var]   : "$else";}
function C($var, $else="") {return isset($_COOKIE[$var])?   $_COOKIE[$var]    : "$else";}
date_default_timezone_set("Asia/Bangkok");

$name   = P("name");
$email  = P("email");
$msg    = P("msg");


$txt = "Name: $name || Email : $email || Message : $msg || DateTime: ". date("F j, Y, H:i");
$myfile = file_put_contents('reservation.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);