<?php
function kolmnurk($kylg_a, $kylg_b){
    $kylg_c = round(sqrt((pow($kylg_a, 2)+pow($kylg_b, 2))));
    return $kylg_c;
}
echo kolmnurk(5, 3);