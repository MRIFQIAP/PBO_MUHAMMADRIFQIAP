<?php
class Perulangan {
    public function loop() {
        // Define the number of asterisks for the increasing and decreasing parts
        $array = array(1, 2, 3, 4, 5, 5, 4, 3, 2, 1);
        
        // Loop through the array and print the corresponding number of asterisks
        foreach ($array as $num) {
            echo str_repeat('*', $num) . "<br/>";
        }
    }
}

$ObjekPerulangan = new Perulangan();
$ObjekPerulangan->loop();
?>
