
<?php
$a=10;
$b=2;
echo "Adição😁👍:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>

<hr>

<?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
?>

<hr>


<?php
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 
?>

<hr>

<?php
$x = 100;
echo "x = ".$x++;
echo "<br>x final = ".$x;
?>

<hr>

<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";//true  
echo "Idêntico = ".($a===$b)."<br>";//false
echo "Não igual = ".($a!=$b)."<br>";//false
echo "Não Idêntico = ".($a!==$b)."<br>";//true 

$j= 1;
$k = 78;
$l = 1000;
$z=($j>$k);
var_dump($z);

//= atribuir/receber
//== ?Igualdade
//=== identico
?>

<hr>

<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) and ($a<=$c));
$e=(($a<=$b) &&  ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>

<hr>

<?php
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));
$e=(($a>=$b) || ($a<=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>

<hr>

<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>

<hr>

<?php
$a=50;
$b=120;
$c=200;
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>