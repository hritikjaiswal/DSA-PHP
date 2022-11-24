
<form method="post">
        <input type="text" name="number">
        <input type="submit" value="submit" name="submit">
    </form>
<?php

if(isset($_POST['submit'])){
    $n = $_POST['number'];

    $n1 = 0;
    $n2 = 1; 
    $x = 0;

    for($i = 0; $i<$n; $i++){
        echo $n1; 
        $n1 = $n1+$n2;
        $n2 = $x;
        $x = $n1;

        echo "<br>";

    }
}
 ?>

