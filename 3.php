<?php

echo "Masukkan bilangan : ";
$bil = trim(fgets(STDIN));

for ($i=1; $i<=$bil; $i++){
    for ($j=1; $j<=$i; $j++){
        echo $j;
    }
    echo "\n";
}

?>