<?php

// Complete the staircase function below.
function staircase($n) {
    $totalSteps = $n;
    $staircase = [];

    for($n; $n>0; $n--){
        $stairs = [];


        for($i=1; $i<=$n; $i++){

            if($i == $n){

                $totalPrintOfStairs = ($totalSteps - $n) + 1;
                for($totalPrintOfStairs; $totalPrintOfStairs>0; $totalPrintOfStairs--){
                 array_push($stairs, "#");
                }
                array_push($staircase, $stairs);
                break;
            }
            array_push($stairs, " ");
        }
    }

    foreach($staircase as $stairs){
        foreach($stairs as $stair){
            echo $stair;
        }
        echo "\n";
    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
