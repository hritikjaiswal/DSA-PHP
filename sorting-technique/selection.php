<?php 

function selection($arr){

    for($i= 0; $i<count($arr); $i++){

        $last = count($arr)- $i - 1;
        $maxIndex = getMaxIndex($arr, 0, $last);
        
        
        $arr = swap($arr, $maxIndex, $last);
        //  print_r($arr);
        
        
    }
    $len = count($arr);
   
    for($i=0; $i<$len; $i++){
        echo $arr[$i]. ", ";
    }

}
function swap($arr, $first, $second){
    $temp = $arr[$first];
    $arr[$first]= $arr[$second];
    $arr[$second] = $temp;
    return $arr;

}
function getMaxIndex($arr , $start, $end){

    $max = $start;
    for($i =$start; $i<=$end; $i++){
        if($arr[$max]<$arr[$i]){
            $max = $i;
        }
    }
    return $max;
}

$ar = [-1, 12, 4, 54, 11];

// $len = sizeof($arr);
$a = selection($ar);


// echo "sort selection array: <br>";

// for($i =0; $i<$len; $i++){
//         echo $arr[$i]. " ";
//  }


?>