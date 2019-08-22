<?php
$handle = fopen ("php://stdin", "r");
function solve($a0, $a1, $a2, $b0, $b1, $b2){
    // Complete this function
    $aScore = 0;
    $bScore = 0;
    $aScore += ($a0 > $b0? 1:0) + ($a1 > $b1? 1:0) + ($a2 > $b2? 1:0);
    $bScore += ($b0 > $a0? 1:0) + ($b1 > $a1? 1:0) + ($b2 > $a2? 1:0);
    
    $score = [];
    array_push($score,$aScore,$bScore);
    return $score;
    //return $aScore." ".$bScore;
}
fscanf($handle, "%d %d %d", $a0, $a1, $a2);
fscanf($handle, "%d %d %d", $b0, $b1, $b2);
$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
//var_dump($result);
echo implode(" ", $result)."\n";
?>
