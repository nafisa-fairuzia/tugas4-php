<?php
function luas_persegi($sisi) {
    return $sisi * $sisi;
}

$sisi = 8;
$luas = luas_persegi($sisi);

echo "Luas persegi dengan sisi $sisi adalah: $luas";
?>