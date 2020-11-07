<?php

$array = [
    ["Susi", 92],
    ["Andi", 80],
    ["Toto", 75],
    ["Made", 65],
    ["Dewi", 60],
];
    for ($i=0; $i<count($array); $i++){
        if ($array[$i][1] >=90){
                echo $array[$i][0]." Gradenya : A+\n";
        }  else if ($array[$i][1] >=80){
                echo $array[$i][0]." Gradenya : A\n";
        }  else if ($array[$i][1] >=70){
                echo $array[$i][0]." Gradenya : B\n";
        }  else if ($array[$i][1] >=60){
                echo $array[$i][0]." Gradenya : C\n";
        }  else {
                echo $array[$i][0]." Gradenya : D\n";
        }
    }

?>