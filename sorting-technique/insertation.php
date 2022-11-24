<?php 

    function insertion($arr){


        for($i= 0; $i <count($arr);  $i++){ //increment
            $val = $arr[$i]; 
            $j = $i-1;  // swap 

            while($j>=0 && $arr[$j]>$val){
                $arr[$j+1]= $arr[$j];
                $j--;

            }
            $arr[$j+1]= $val;

        }

        return $arr;


     }

        

$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n <br>" ;

echo implode(', ',$test_array );

echo "<br>";

$ans = insertion($test_array);

foreach($ans as $a){
    echo $a. " ";
}