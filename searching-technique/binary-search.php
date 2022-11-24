<?php
//binary search if array in ascending order

//return index 
//return -1 if value not exists 
function binarysearch($arr,$target){

    $arr = [-18, -12, -3, 0, 2, 4, 6, 8, 11, 12, 15, 17, 19, 22, 34];
    $start = 0 ;
    $end = count($arr)-1;

    while($start<=$end){
        //find middle elements

        //int middle = $start + ($end - $start)/2; // 
        //it migt be possible that that would be (start+end)/2 but it won't be poosible if int value get exceeds the value 

        $mid = $start + ($end - $start)/2;
        
        if($target < $arr[$mid]){
            $end = $mid -1;             // for left side that value will exists left side

        }elseif($target > $arr[$mid]){

            $start = $mid +1;               // for right side that value will exists right side

        }else {

            return $mid;                //ans found
        }
    }
    return -1;
}
$target = -12;
$ans =  binarysearch($arr, $target);
echo $ans;

 ?>

