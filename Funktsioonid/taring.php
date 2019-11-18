<?php
function dice(){
    $number = rand(1, 6);
    return $number;
}
echo dice();