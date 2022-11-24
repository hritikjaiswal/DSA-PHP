<?php 

function quick(&$arr, $left, $right){

    if($left < $right){

       $pivot = partition($arr, $left, $right);
       
       quick($arr, $left, $pivot-1); //recursion
       quick($arr, $pivot+1, $right);
        
       
    }

}

function partition(&$arr, $left, $right){

    $i = $left;
    $pivot = $arr[$right];

    for($j= $left; $j<=$right; $j++){

        if($arr[$j]<$pivot){
            $temp = $arr[$i];
            $arr[$i]= $arr[$j];
            $arr[$j]= $temp;
            $i++;
        }
    }
    $temp = $arr[$right];
    $arr[$right]= $arr[$i];
    $arr[$i]= $temp;
    return $i;
}



function printArr($arr, $n){
    for($i = 0; $i<$n; $i++)
    echo $arr[$i]. " ";
echo "\n";
    
}
$myArr = [-1, -2, 0, 12, 11, 6, 8, 13, 18, 15];
$n= sizeof($myArr);
echo "original array: ";
printArr($myArr, $n);


echo "<br>";

quick($myArr, 0, $n-1);
echo " sorted arr is: <br>";
printArr($myArr, $n);


?>