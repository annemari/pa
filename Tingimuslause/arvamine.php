<?php

$etteAndtudArv = 20;
$kasutajaArv = 20;

// võrdleme
if($etteAndtudArv == $kasutajaArv){
    // arvud on võrdsed
    echo 'Tubli! Arvasid ära!<br>';
    echo 'Arv on '.$kasutajaArv.'<br>';
} else {
    // arvud ei ole võrdsed

    $vahemik = abs($kasutajaArv - $etteAndtudArv);
    if($vahemik <= 5){

        echo 'Veel ei arvanud ära, aga juba oled lähedal<br>';
    }
    if($kasutajaArv > $etteAndtudArv) {

        echo $kasutajaArv.' on suurem, kui ette antud arv<br>';
    } else {

        echo $kasutajaArv.' on väiksem, kui ette antud arv<br>';
    }
}