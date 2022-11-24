<?php

function bubble(&$arr)
{
    //run  the step n-1 times
    //$arr = array();


    for ($i = 0; $i < count($arr); $i++) {
        $swapped = false;
        for ($j = 1; $j < count($arr) - $i; $j++) {
            if ($arr[$j] < $arr[$j - 1]) {
                $temp = (int) $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
                $swapped = true;
            }
            //return $arr;

        }

        if (!$swapped) {
            break;
        }
    }
}
$arr = [-1, 12, 4, 54, 11];
$len = sizeof($arr);
bubble($arr);

echo "sort bubble array: <br>";

for ($i = 0; $i < $len; $i++) {
    echo $arr[$i] . " ";
}
