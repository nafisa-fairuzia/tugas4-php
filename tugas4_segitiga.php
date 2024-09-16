<?php
function sisi_miring($alas, $tinggi) {
    return sqrt(($alas * $alas) + ($tinggi * $tinggi));
}

$alas = 3;   
$tinggi = 4; 
$sisiMiring = sisi_miring($alas, $tinggi);

echo "Sisi miring segitiga dengan alas $alas dan tinggi $tinggi adalah: $sisiMiring";
?>