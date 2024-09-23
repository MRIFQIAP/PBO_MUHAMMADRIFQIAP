<?php
 
class perulangan
{
    var $t;
 
    public function setTinggi($t)
    {
        $this->t = $t;
    }
 
    public function getTinggi()
    {
        return $this->t;
    } 
    public function cetakSegitigaKiri()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
$segitiga1 = new perulangan();
$segitiga1->setTinggi(5);
$segitiga1->cetakSegitigaKiri();