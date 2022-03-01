<?php
/**
 * try {
 * //code that can throw exceptions
 * } catch(Exception $e) {
 * //code that runs when an exception is caught
 * } finally {
 * //code that always runs regardless of whether an exception was caught
 * }
 */

function calc($n1,$n2){
    if($n2==0){
        throw new Exception("/ by zero");
    }

    return $n1/$n2;
}
try {
    echo "Output: ".calc(10,5);
    $num=[10,20];
    echo "<br>".$num[10];

}catch (Exception $e){
    echo "Error:$e";
} finally {
    echo "<br>Hello World";
}
