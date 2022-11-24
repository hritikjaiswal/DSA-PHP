<?php

function quick($arr, $low, $high){

    if($low>= $high){
        return;
    }
    $start = $low;
    $end =$high;
    $mid = (int)($start + ($end - $start)/2);
    
    $pivot = $arr[$mid];
    

    while($start<=$end){
        //also reason why if its already sorted it will not swap
        while($arr[$start]<$pivot) {

            $start++;

            
        }
        while($arr[$end]>$pivot){
            $end++;

        }
        if($start< $end){
            $temp = $arr[$start];
            $arr[$start] = $arr[$end];
            $arr[$end] = $temp;

            $start++;
            $end--;
        }
    }
    // now my pivot is now at correct index, please sort two of half
    
    
    quick($arr, $low, $end);
    quick($arr, $start, $high);
    

}
$arr = [3, 4, 2, 1, 6, 0, -1, 8];
$n = count($arr);

quick($arr, 0 , $n -1);




  
 ?>