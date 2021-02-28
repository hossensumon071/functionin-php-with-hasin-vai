<?php

function evenOrOdd($n){
    if($n%2==0){
        return true;
    } else {
        return false;
    }
}

$x = 13;

if (evenOrOdd($x)){
    echo "{$x} is an even number";
}else{
    echo "{$x} is an odd number";
}