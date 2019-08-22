<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
  $f = lcm($a);
  $l = gcd($b);
  $count = 0;
  for($i = $f, $j=2; $i<=$l; $i=$f*$j,$j++){
      if($l % $i == 0){ $count++;}
  }
  return $count;    
}

function gcd($a){
  $res = $a[0];
  for($i=1;$i<sizeof($a);$i++){
    $res = gcd_concat($res, $a[$i]);
  }
  return $res;
}
function gcd_concat($a,$b){
  while($b > 0 ){
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
  }
  return $a;
}
function lcm_concat($a, $b){
  return $a * ($b / gcd_concat($a, $b));
}
function lcm($a){
  $res = $a[0];
  for ($i = 1; $i < sizeof($a); $i++) {
      $res = lcm_concat($res, $a[$i]);
  }
  return $res;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
