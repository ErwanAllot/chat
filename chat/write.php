<?php
include 'adress.php';
$circleToRead = '<div id="read_circle" style="background-color: rgb('.$red.','.$green.','.$blue.')"></div>';

date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d H:i:s");
$date = '<div id="read_date">' . $date . '</div>';

$pseudo = $_REQUEST["pseudo"];
$text = $_REQUEST["text"];

//=================================
$modo = 'OFF';
if ($pseudo == 'modo' && $text == 'stop'){
    $modo = 'ON';
}
//=================================

$pseudo = htmlspecialchars($_REQUEST["pseudo"]);
$pseudo = '<span id="read_pseudo">' . $pseudo . '</span>';

$text = htmlspecialchars($_REQUEST["text"]);
$text = str_replace("Bourricot", "<br>", $text);

$text = $pseudo . ': '.  $text;

$text = nl2br($text);
$text = '<div id="read_text">' . $text . '</div>';

$all = $date . $circleToRead . $text;

$all = '<div id="outputPerLineOfText">' . $all . '</div>';


$myfile = "abc.txt";

$all = $all . "\n";
$handle = fopen($myfile,"a");
fwrite($handle, $all);
fclose($handle);

if ($modo == 'ON'){
    fopen($myfile,"w");
}

include 'read.php';
?>