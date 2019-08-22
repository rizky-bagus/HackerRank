<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $POSITIVES = 0;
    $NEGATIVES = 1;
    $ZEROES = 2;

    $length = count($arr);
    
    $numbers = [0, 0, 0];

    
    foreach($arr as $val){
        if($val === 0){
            $numbers[$ZEROES] = $numbers[$ZEROES] + 1;
            continue;
        }
        if($val > 0){
            $numbers[$POSITIVES] = $numbers[$POSITIVES] + 1;
            continue;
        }
        $numbers[$NEGATIVES] = $numbers[$NEGATIVES] + 1;
    }

    $plusMinusArr = array_map(function ($number) use ($length) {
        return number_format($number/$length, 6);
    }, $numbers);

    foreach($plusMinusArr as $plusMinus){
        echo $plusMinus;
        echo "\n";
    }


}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
