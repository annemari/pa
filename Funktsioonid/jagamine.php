<?php
function jagamine($arv1, $arv2) {
    $jagatis = $arv1/$arv2;
    if ($arv2==0){
        echo 'Nulliga ei saa jagada!<br>';
    } else {
        return $jagatis;
    }
    return $jagatis;
}
echo jagamine(4, 2);