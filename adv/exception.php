<?php
try {
    $n = 0;
    if ($n === 0) {
        return throw new Exception("invalid no.");
    }
    echo 50 / $n;
} catch (Exception $e) {
    // echo $e;
    echo "can't / by zero.";
}
