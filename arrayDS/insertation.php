
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">

    insert the value: <input type="text" name="insertvalue" ><br>
    insert possition at: <input type="text" name="insertpos"><br>
    <input type="submit" value="submit" name="submit">
    
    </form>
</body>
</html>
<?php 
$la = [];
if(isset($_POST['submit'])){
    $item = $_POST['insertvalue']; 
    $k =$_POST['insertpos']; 
  
    $n = count($la);

    $j = $n;
    
    for($i = 0; $i<count($la); $i++) {
        echo "car[$i]=". $la[$i]. "<br>";
}
$n = $n +1;
while($j>=$k){
    $la[$j+1]= $la[$j];
    $j = $j-1;
    //echo $j;
    
}
$la[$k] = $item;


print " the array after insert: <br>";

for($i = 0; $i<$n; $i++) {
    
    echo "car[$i]=".$la[$i]. "<br>"; 
     
}

}


?>