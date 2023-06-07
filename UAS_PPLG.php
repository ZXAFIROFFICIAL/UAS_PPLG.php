<?php

$charger = array(
    "Charger VeryLowCharging" => 1000,
    "Charger LowCharging" => 1500,
    "Charger MediumCharging" => 2000,
    "Charger FastCharging" => 2500,
);

function hitungKecepatanCharger($dayaCharger)
{
    global $charger;
    
    $hasilKecepatan = array();

    $chargerKeys = array_keys($charger);
    $chargerCount = count($charger);

    for ($i = 0; $i < $chargerCount; $i++) {
        $namaCharger = $chargerKeys[$i];
        $kecepatan = $charger[$namaCharger];

      $kecepatanCharger = $dayaCharger / $kecepatan;

        if ($kecepatanCharger >= 1) {
            $hasilKecepatan[$namaCharger] = $kecepatanCharger;
        }
    }

    return $hasilKecepatan;
}
// Menghitung kecepatan charger handphone
$dayaCharger = 6500;

$hasil = hitungKecepatanCharger($dayaCharger);

echo "Hasil Kecepatan Charger Handphone:<br>";
$hasilKeys = array_keys($hasil);
$hasilCount = count($hasil);
for ($i = 0; $i < $hasilCount; $i++) {
    $namaCharger = $hasilKeys[$i];
    $kecepatanCharger = $hasil[$namaCharger];
    echo "• " . $namaCharger . ": " . $kecepatanCharger . " jam<br>";
}

?>
