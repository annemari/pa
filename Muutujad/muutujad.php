<?php
$nimi = "Anne-Mari";

//muutujate loomine
$enimi = 'Anne-Mari';
$pnimi = "Eensaar";
$vanus = 27;
$kaal = 65;

//muutujate väljastamine
echo $enimi;
echo $pnimi;
echo $vanus;
echo $kaal;

//muutujate liitmine
$enimi = 'Anne-Mari';
$pnimi = "Eensaar";
$nimi = $enimi.' '.$pnimi;

echo 'Tere '.$nimi.'!<br>';
echo 'Sinu vanus: '.$vanus.'<br>';
echo 'Sinu kaal: '.$kaal.'<br>';

//tekstiväärtused
//kahekordsed jutumärgid
echo "$nimi on $vanus aastane<br>";
//ühekordsed jutumärgid
echo $nimi.' on '.$vanus.' aastane<br>';

//muutuja käänamine
echo "${enimi}il on kiire auto!<br>";

//jutumärkide kuvamine
echo '"Welcome to Estonia"<br>';
echo "Shakespeare'i teosed<br>";
?>