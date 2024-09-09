<?php

$member = "Ya";
$TotalBelanja = 570000;

switch ($member) {
    case "Ya":
        if ($TotalBelanja > 500000) {
            $totalBayar = $TotalBelanja - 50000;
        } elseif ($TotalBelanja > 100000) {
            $totalBayar = $TotalBelanja - 15000;
        } else {
            $totalBayar = $TotalBelanja;
        }
        break;

    case "Tidak":
        if ($TotalBelanja > 100000) {
            $totalBayar = $TotalBelanja - 5000;
        } else {
            $totalBayar = $TotalBelanja;
        }
        break;

    default:
        $totalBayar = $TotalBelanja;
        break;
}

echo "Apakah ada kartu member: ".$member."<br>";
echo "Total Belanjaan: ".$TotalBelanja."<br>";
echo "Total Bayar: ".$totalBayar."<br>";
?>