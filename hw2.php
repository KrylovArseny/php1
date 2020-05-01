<?php 
   echo"<h2>1 задание</h2>";
$x;
$y;
 function compare_numbers($x, $y){
    if ($x >= 0 && $y >= 0 )
       echo $x-$y."<br>";
    else if ($x < 0 && $y < 0)
       echo $x * $y."<br>";
    else if ($x > 0 && $y < 0)
       echo $x + $y."<br>";
    else 
        echo $x + $y."<br>" ;
 };

    compare_numbers(20, 0);
    compare_numbers(-10, -25);


    echo"<h2>3 задание</h2>";

    function mult($a, $b ){
        return $a * $b."<br>";
     }
     
    echo mult(8, 2);

    function divis($a, $b ){
        return $a / $b."<br>";
     }

     echo divis(8, 2);

     function add($a, $b ){
        return $a + $b."<br>";
     }

     echo add(8, 2);

     function sub($a, $b ){
        return $a - $b."<br>";
     }
     echo sub(8, 2);


     echo"<h2>4 задание</h2>";


     function mathOperation($arg1, $arg2, $operation){
        switch ($operation){
        case 'mult':
            echo $arg1 * $arg2."<br>";
        break;
         case 'divis':
            echo $arg1 / $arg2."<br>";
        break;
         case 'add':
            echo $arg1 + $arg2."<br>";
        break;
        case 'sub':
            echo $arg1 - $arg2."<br>";
        break;
     }}
    echo mathOperation(1, 3, sub);
    echo mathOperation(33, 44, mult);

    echo"<h2>5 задание</h2>";
    echo date('Y');


    echo"<h2>6 задание</h2>";
    echo date('Y');

    echo"<h2>7 задание</h2>";
    function power($val, $pow)
    {
        if ($pow == 0) {
            return 1;
        } elseif  ($pow < 0) {
            return 0;
        }
        return $val * power($val, $pow - 1);
    }
    echo power(43, 6);

?>
