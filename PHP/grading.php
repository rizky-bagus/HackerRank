<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    $MODULO = 5;
     $finalGrades = [];

     $finalGrades = array_map(function($grade) use ($MODULO){
         // get the next multiplier by 5
         $nextMultiplier = $grade + ($MODULO - $grade % $MODULO);
         $difference = $nextMultiplier - $grade;
         // do not round up if grade less than 40 
         // the difference is 3 and greater than 3
         if($nextMultiplier < 40 || $difference === 3 || $difference > 3){
             return $grade;
         }
         
         // round up if the difference is less than 3
         return $nextMultiplier;
     }, $grades);

     return $finalGrades;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
