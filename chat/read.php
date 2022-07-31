<?php

$myfile = "abc.txt";
$output = "";

$lines = file($myfile);
$i=count($lines)-1;

$limitNumberOfMessages = 100;

if($i < $limitNumberOfMessages){
    while($i>=0){$output .= $lines[$i].'<br>';$i--;}
}
else {
    $z= $i-$limitNumberOfMessages;
    while($i>$z){$output .= $lines[$i].'<br>';$i--;}
}

echo $output;
?>