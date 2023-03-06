<?php

$ans = 0;
$iVal = 0 ;
$addVal = 1 ;
echo "$iVal \n";
echo "$addVal \n";
while($ans < 10000){
    // echo "$ans \n";
    $ans = $iVal + $addVal ;
    $iVal = $addVal ;
    $addVal = $ans ;
    echo "$ans \n";
}
