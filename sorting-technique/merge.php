<?php



function mergeFun(&$arr, $left, $mid, $right){

    $num1 = $mid - $left+1;
    $num2 = $right - $mid;

    

    $L = []; 
    $R = []; 

    for($i = 0; $i<$num1; $i++)
        $L[$i] = $arr[$left + $i];
    echo "<pre>";
    print_r($L);
    

    for($j =0; $j<$num2; $j++)
        $R[$j] = $arr[$mid+1 + $j];
    echo "hritik";
    print_r($R);
    $i = 0;
    $j = 0;

    $k = $left;

    while($i < $num1 && $j < $num2){

        if($L[$i]<=$R[$j]){
            $arr[$k] = $L[$i];
            $i++;
        }else{
            $arr[$k] = $R[$j];
            $j++;

        }
        $k++;

    }
    while($i<$num1){
        $arr[$k] = $L[$i];
        $i++;
        $k++;

    }
    while($j<$num2){
        $arr[$k]= $R[$j];
        $j++;
        $k++;



    }
    
}
function mergeSort(&$arr, $left, $right){
    if($left < $right){
        $mid = $left + (int)(($right - $left)/2);
        
        

        mergeSort($arr, $left, $mid);
        mergeSort($arr, $mid +1, $right);

        mergeFun($arr, $left , $mid, $right);
    }
}


function printArr($arr, $size){
    for($i = 0; $i<$size; $i++)
        echo $arr[$i]." ";
    echo "<br>";
}
$my_arr = [4, 6, 3, 1, -1, 0 , 9, -11, 7];

$arr_size = count($my_arr);

echo "given array is: <br>";

printArr($my_arr, $arr_size);

mergeSort($my_arr, 0, $arr_size -1);

echo "sorted array is: <br> ";

printArr($my_arr, $arr_size);


//return 0;

 ?> 