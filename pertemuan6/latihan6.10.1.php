<?php
class Perulangan {
    public function loop() {
    for ($i = 2; $i <= 10; $i += 2) 
{
    for ($j = $i; $j < 10; $j += 2) 
    {
        echo "&nbsp;&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) 
    {
        echo "*";
        echo "&nbsp;";
    }
    echo "&nbsp;";
    echo "<br/>";
}
}
}
$ObjekPerulangan = new Perulangan();
$ObjekPerulangan->loop();
?>