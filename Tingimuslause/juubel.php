<?php

$hetkeAasta = 2019;
$sunniAasta = 2009;
$vanus = $hetkeAasta - $sunniAasta;

// väljastan vanuse
echo 'Oled '.$vanus.' aastat vana.<br>';

$jaak = $vanus % 5;

if($jaak == 0) {
    echo 'Sel aastal on juubel!<br>';
} else {
    echo 'Veel juubelit ei ole.<br>';
}