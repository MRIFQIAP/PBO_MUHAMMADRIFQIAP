<?php

class KalkulatorSuhu {
    var $suhuCelcius = 100;
    var $fahrenheit;
    var $kelvin;
    var $reamur;
    
    function celciusToFahrenheit() {
        $this->fahrenheit = (9/5) * $this->suhuCelcius + 32;
    }

    function celciustokelvin() {
        $this->kelvin = $this ->suhuCelcius + 273.15 ;
    }

    function celciustoreamur() {
        $this->reamur = (4/5) * $this->suhuCelcius;
    }
}

$kalkulator = new KalkulatorSuhu();
$kalkulator->celciusToFahrenheit(); 
$kalkulator -> celciustokelvin();
$kalkulator -> celciustoreamur();

echo "Hasil konversi From Celcius: 100 To Fahrenheit Kelvin Reamur : <Br>";
echo 'Fahreinheit: '.$kalkulator ->fahrenheit. 'F <Br>';
echo 'Kelvin: '.$kalkulator -> kelvin. 'K <Br>';
echo 'Reamur: '.$kalkulator -> reamur. " Re <Br>";

?>
