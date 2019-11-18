?php

$kodakontsus = 'eestlane';
$vanus = 18;
$haridus = 'kutseharidus';

//kodakontsuse kontroll
if ($kodakontsus == 'eestlane'){
//vanuse kontroll
if($vanus >= 18){
//hariduse kontroll
if($haridus == 'pohiharidus' or $haridus == 'kutseharidus' or $haridus == 'keskharidus' or $haridus == 'korgharidus'){

echo 'Haridustase on sobilik<br>';
echo 'Oled valmis sõjaväekohustuseks<br>';
}
//haridus
else {
echo 'Haridustase ei ole piisav<br>';
}
} else {
// vanus
echo 'Hetkel oled veel liiga noor<br>';
}
} else {
//kodakontsus
echo 'Riigiseadus ei kohustu sõevaekohustuseks<br>';
}
