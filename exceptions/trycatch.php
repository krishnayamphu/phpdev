<?php
/**
 * try {
 * //code that can throw exceptions
 * } catch(Exception $e) {
 * //code that runs when an exception is caught
 * }
 *
 */

function calculate($n1, $n2){
    if($n2==0){
        throw new Exception("/ by zero");
    }
    return $n1/$n2;
}

try {
    echo calculate(10, 5);
} catch (Exception $e) {
    echo "Custom Error message: $e";
}
