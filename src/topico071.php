<?php 
 echo"<h1>While</h1>";

 $i=0;
 while ($i<=10) {
    echo " $i";
    $i+=2;
 }
/*

Saída: 0 1 2 3 4
1-  valor inicial? 0
2- condição?    $i<5
3-  contador? $i++
4-  quantas vezes o looping foi executado? 5 vezes
5- valor que torna a condição como falsa? se for 5

----------------------------------------------------
Saída: 11 12 13 14
1-  valor inicial? 11
2- condição?    $i<15
3-  contador? $i++
4-  quantas vezes o looping foi executado? 4 vezes
5- valor que torna a condição como falsa? se for 15

-----------------------------------------------------

Saída: 4 3 2 1 0
1-  valor inicial? 4
2- condição?    $i>=0
3-  contador? $i--
4-  quantas vezes o looping foi executado? 5 vezes
5- valor que torna a condição como falsa? se for -1

------------------------------------------------------

Saída: 0 2 4 6 8 10
1-  valor inicial? 0
2- condição?    $i<11
3-  contador? $i+=2
4-  quantas vezes o looping foi executado? 6 vezes
5- valor que torna a condição como falsa? se for 12
*/

echo "<h1> Do While </h1>";


$i = 7;

do {
    echo " $i";
    $i++;
} while ($i < 5);

/* 
1-  valor inicial? 7
2- condição?    $i<5
3-  contador? $i++
4-  quantas vezes o looping foi executado? 1
5- valor que torna a condição como falsa? 8

-------------------------------------------------------
*/
echo "<h1> For </h1>";
    for ($i= 0; $i< 5; $i++)  echo "$i ";
    
?>