<?php
declare(strict_types=1);
function addnumbers(int $j, int $w){
return $j + $w;
}
echo addnumbers(5,5);
echo "<br>";
function setheight (int $minheight = 60 ){
echo "the height is : $minheight<br>";
}
setheight(430);
setheight();
setheight(120);
function sum(int $e,int $u ){
$q = $e + $u ;
return $q;
}
echo "5 + 10 =" .sum (5,10)."<br>";
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
