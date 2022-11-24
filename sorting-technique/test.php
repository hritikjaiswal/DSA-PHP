<?php
// function quicksort(&$Array, $left, $right) {
//     if ($left < $right) { 
//       $pivot = partition($Array, $left, $right);
//       quicksort($Array, $left, $pivot-1);
//       quicksort($Array, $pivot+1, $right);
//     }
//   }
  

//   function partition(&$Array, $left, $right) {
//     $i = $left;
//     $pivot = $Array[$right];
//     for($j = $left; $j <=$right; $j++) {
//       if($Array[$j] < $pivot) {
//         $temp = $Array[$i];
//         $Array[$i] = $Array[$j];
//         $Array[$j] = $temp;
//         $i++;
//       }
//     }
  
//     $temp = $Array[$right];
//     $Array[$right] = $Array[$i];
//     $Array[$i] = $temp;
//     return $i;
//   }
  

//   function PrintArray($Array, $n) { 
//     for ($i = 0; $i < $n; $i++) 
//       echo $Array[$i]." "; 
//     echo "\n";
//   } 
  

//   $MyArray = [-1, -2, 0, 12, 11, 6, 8, 13, 18, 15];
//   $n = sizeof($MyArray); 
//   echo "Original Array\n";
//   PrintArray($MyArray, $n);
  
//   quicksort($MyArray, 0, $n-1);
//   echo "\nSorted Array\n";
//   PrintArray($MyArray, $n);


// $left = 0;
// $right = 7;


// $mid = $left + (int)(($right - $left)/2);
// $mid = (int) 4.5;
// echo $mid;

class ArrayValue implements JsonSerializable {
    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize() {
        return $this->array;
    }
}

$array = ['foo' => 'bar', 'quux' => 'baz'];
echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);

?>
