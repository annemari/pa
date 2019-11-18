<?php

// funktsiooni loomine
function tervita($enimi="Hea", $pnimi="Kylaline"){
    return "Tere $enimi $pnimi";
}

echo tervita();
echo "<br>";
echo tervita("Karin", "Eegreid");
echo "<br>";
echo tervita("Imre", "Tard");


//matemaatilised funktsioonid

//väiksem suurem

echo min(11,21,32,43,54);
echo max(11,21,32,43,54);


//suurim kõigist massiividest

$arvud = array(11,21,32,43,54);
$arvud2 = array(60,72,42,34,45);
echo max(max($arvud), max($arvud2));


//ümardamine

$arv = 3.456;

echo round($arv);
echo round($arv,2);


//astendamine

echo pow(5,2);
echo pow(5,3);


//ruutjuur

echo sqrt(9);


//pi

echo pi();


//sin, cos, tan

echo cos(0.8);
echo tan(0.8);
echo sin(0.8);


//nurkade teisendamine

echo deg2rad(30);


//aja funktsioonid

//aja kuvamine

echo date('d.m.Y G:i' , time());


//ajavöönd

date_default_timezone_set('Europe/Tallinn');


//Pikk kuupäev

echo date('d.F.Y');


//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;


?>

