<?php

function doTaskA(){
    echo "step A Done\n";
}
function doTaskB(){
    echo "Step B Done\n";
}
function doTaskC(){
    echo "Step c Done\n";
}
function doTaskD(){
    echo "Step D Done\n";
}
function doTaskE(){
    echo "Step E Done\n";
}

function doTheLargeTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doTheLargeTask();