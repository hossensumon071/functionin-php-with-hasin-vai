<?php
$ft = "Coffee";
$n = "2 cuips";

function serve($foodType,$numberOfItems){
    echo "{$numberOfItems} of {$foodType} has been served";
}

serve($ft, $n); 