<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $maxSumTempArr = $arr;
    $minSumTempArr = $arr;

    
    sort($minSumTempArr);
    $minSumArr = array_splice($minSumTempArr, 0 ,4);

    
    rsort($maxSumTempArr);
    $maxSumArr = array_splice($maxSumTempArr, 0, 4);    

    echo array_sum($minSumArr) . ' ' . array_sum($maxSumArr);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
