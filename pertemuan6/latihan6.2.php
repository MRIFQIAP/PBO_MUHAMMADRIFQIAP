<?php
class perulangan {
    public function loop (){
        for ($i = 15; $i > 0;$i--)
        {
            echo $i;
            echo "<br/>";
        }
    }
}
$ObjekPerulangan = new perulangan ();
echo "jenis perulangan lainnya "."<br/>";
echo $ObjekPerulangan -> loop()."<br/>";
?>