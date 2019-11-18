<?php

// defineerime muutujad
$x = 5;
$y = -15;

// jagame ühe arvu teisega
$jagatis = $x / $y;

// kontrollime
if($y == 0){

    // hoiatuslause
    echo 'Nulliga ei saa jagada!<br>';
} else {
    echo $x.' / '.$y.' = '.$jagatis.'<br>';
}
?>
