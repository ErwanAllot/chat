<?php

$timestamp = date(time());

$tempo = $timestamp % 9; // warning, depending of setInterval

$fileToDestroy = '';
$fileToRead = '';
$fileToAdd = '';

switch($tempo){
    
    case 0:case 1:case 2:
        $fileToDestroy = 'tempo1in3.txt';
        $fileToRead = 'tempo2in3.txt';
        $fileToAdd = 'tempo3in3.txt';
    break;

    case 3:case 4:case 5:
        $fileToDestroy = 'tempo2in3.txt';
        $fileToRead = 'tempo3in3.txt';
        $fileToAdd = 'tempo1in3.txt';
    break;

    case 6:case 7:case 8:
        $fileToDestroy = 'tempo3in3.txt';
        $fileToRead = 'tempo1in3.txt';
        $fileToAdd = 'tempo2in3.txt';
    break;
}


$numberOfPeopleConnected = file($fileToRead)[0];

$countMe = file($fileToAdd)[0] + 1;
$handle = fopen($fileToAdd,"w");
fwrite($handle, $countMe);
fclose($handle);

$handle = fopen($fileToDestroy,"w");
fwrite($handle, 0);
fclose($handle);

/*


$countMe = file($fileToAdd)[0] + 1;
$handle = fopen($fileToAdd,"w");
fwrite($handle, $countMe);
fclose($handle);
*/

/*
$lines = file($myfile);  
for($i=count($lines)-1;$i>0;$i--){
    $output .= $lines[$i].'<br>';
}
*/


/*
$myfile = "abc.txt";

$text2 = $all . "\n";
$handle = fopen($myfile,"a");
fwrite($handle, $text2);
fclose($handle);
*/


echo $numberOfPeopleConnected;
?>