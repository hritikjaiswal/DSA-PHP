<?php

// if our array isn't know sorting order whether it is asc or desc its call order agnostic binary search algorithm
class BinarySearch{
    function order_agnostic_bs( $arr, $target){
        $arr = [-18, -12, -3, 0, 2, 4, 6, 8, 11, 12, 15, 17, 19, 22, 34]; //for asc
    //$arr = [34, 22, 19, 18, 12, 11, 9 , 4, 2, 0, -1, -8, -12, -15];          //for desc
        $start = 0 ;
        $end = count($arr)-1;

    // find whether the array is sorted in asc or desc
    if($arr[$start]< $arr[$end])
    {
        $isAsc = true;
    }else{
        $isAsc = false;
    }

    while($start<=$end){
        //find middle elements

        //int middle = $start + ($end - $start)/2; // 
        //it migt be possible that that would be (start+end)/2 but it won't be poosible if int value get exceeds the value 

         $mid = (int)($start + ($end - $start)/2);

        if($arr[$mid] == $target){
            return $mid;
        }
        if($isAsc){                 // if its ascending

            if($target < $arr[$mid]){
                $end = $mid -1;             // for left side that value will exists left side
    
            }else{                          //then $target > $arr[$mid]
                $start = $mid +1;               // for right side that value will exists right side
            }
        }else{              // then its descending

            if($target > $arr[$mid]){
                $end = $mid -1;             // for right side that value will exists right side
    
            }else{                          //then $target < $arr[$mid]
                $start = $mid +1;               // for left side that value will exists left side
            }
        }
        
    }
    return -1;

}
}
$seach = new BinarySearch();
$target = 34;
$ans = $seach->order_agnostic_bs($arr, $target);
echo $ans;


 ?>