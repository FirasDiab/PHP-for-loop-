<?php

// Ex1:

for($u = 1 ; $u <=10 ; $u++){
    if($u == 10){
        echo $u . "<br>";
    } else{
        echo $u . "-";
    }
    
}

echo "<hr>";
// Ex2:
$Sum = 0;
for ($S = 0 ; $S <= 30 ; $S++){
    
    $Sum += $S;
}
echo $Sum . "<br>";

echo "<hr>";
// Ex3- A:


for($p = 1 ; $p <= 5 ; $p++){
    for($pch = ord('A') ; $pch <= ord('E'); $pch++){
        echo str_repeat("A ", 5-$p) . str_repeat(chr($pch) . " " , $p) . "<br>";
        if($p++ > $p){
        break;
        }
    }   
}

echo "<hr>";
//Ex 3-B :
for($n=1; $n <= 5 ; $n++){
    for($n1 = 1;$n1 <=5 ; $n1++){
        echo str_repeat(1 . " " , 5-$n) . str_repeat($n1 . " " , $n) . "<br>";
        if($n++ > $n){
        break;
        }
    }  
}

echo "<hr>";
//Ex4:

for($i = 5 ; $i>= 1 ; $i--){
    for($num = 1 ; $num <=5 ; $num++){
        echo str_repeat(0 , 5 - $i) . $num . str_repeat(0 , 5 - $num) . "<br>";
        if($i-- < $i){
        break;
        }
    }
}

echo "<hr>";
//Ex5:

function factorial($fac){
    $mult = 1;
    for($fac ; $fac >= 1 ; $fac--){
        $mult *= $fac;
    }
    echo $mult;

}
factorial(4);

// $mul = 1;
// for($fa = 5 ; $fa >= 1 ; $fa--){
//     $mul *= $fa;
    
// }
// echo $mul;

//Ex6:
echo "<hr>";

$i=0;
$g=0;
$f = 0;

while ($i<=5) {
   $i++;
  
while ($f<=3){
    $g+=$i;
    echo $g.'<br>';
    if($f == 3){
    break;
    }
    $i+=$g;
    echo $i.'<br>'; 
    $f++;
}    
}

echo "<hr>";
//Ex7:
$arw = 0;
$arr = ['O' ,'r','a', 'n' , 'g' , 'e' , 'A' , 'c' , 'a' , 'd' , 'e' , 'm' , 'y'];
foreach($arr as $val){
    if ($val === 'c'){
        $arw += 1;
    }
}
echo $arw;

echo "<hr>";
?>



<!-- Ex8: -->
<table border="3">
<?php

$rr =6;
for($row=1 ; $row <=6 ; $row++){
    echo "<tr>";
    for($nu = 1 ;$nu <=6; $nu++){
        $nu1 = $nu * $row;
        echo "<td>$nu * $row = $nu1 </td>"; 
    }
    echo "</tr>"; 
}

echo "<hr>";
?>
</table>


<!-- Ex10: -->
<table border="3">
<?php
echo "<hr>";
for($i10=1; $i10 <=10 ; $i10++){
    echo "<tr>";
    for($x10=1; $x10 <=10 ; $x10++){
        $y10= $x10 * $i10 ;
        echo "<td> $y10 </td> ";
    }
    echo "</tr>";


}

?>
</table>

<?php
//Ex 11:

echo "<hr>";
for($i11=1 ; $i11<=50; $i11++){
    if($i11 % 3 == 0 && $i11 % 5 == 0){
        echo "FizzBuzz" . $i11 ."<br>";
    }
    elseif($i11 % 3 == 0){
        echo "Fizz" . $i11 ."<br>";
    } elseif($i11 % 5 == 0){
        echo "Buzz".$i11 ."<br>";
    } else{
        echo $i11 . "<br>";
    }

}

echo "<hr>";

//Ex12:

$n22 = 5; 
$count = 1;
for ($i22 = $n22; $i22 > 0; $i22--) 
{
  for ($j22 = $i22; $j22 < $n22 + 1; $j22++) 
   {
     echo $count . " ";
     $count++;
   } 
	echo "<br>";
   }
?>









