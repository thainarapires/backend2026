<?php 
//array indexada/o
$a=12;
$a=43;
$a=3;
echo "<br> a = $a";


$arr=[43,53,67];
echo "<br> arr[0]  = ".$arr[0];
echo "<br> arr[1]  = ".$arr[1];
echo "<br> arr[2]  = ".$arr[2];

$uf=["SP","RJ","MG","ES"];

echo "<br> uf[2]  = ".$uf[2];
echo "<pre>";print_r($uf);echo "</pre>";



?>
<hr>
<?php 
//array associativo/a

$estudante=[
    "id" => 1,
    "ra" => 123456,
    "nome" => "bete",
    "curso" => "TADS"
];
echo"<br> id:  ".$estudante["id"];
echo"<br> ra:  ".$estudante["ra"];
echo"<br> nome:  ".$estudante["nome"];
echo"<br> curso:  ".$estudante["curso"];


?>
<hr>
<?php 
//array multidimensional
    $matriz=[
    [10,"navio",30],
    [40,"bote",60,"ilha"],
    ["agua",80,"submarino"]
    ];
    echo"<br> matriz: " .$matriz[2][0];
    echo"<br> matriz: " .$matriz[0][1];
    echo"<br> matriz: " .$matriz[1][1];
    echo"<br> matriz: " .$matriz[2][2];
    echo "<pre>";print_r($matriz);echo "</pre>";

//60
/* 
agua
navio
bote
submarino
*/
?>
<hr>
<?php 
//desafi HARDCOREE MERMAO


$bd=[
    
["id"=>1,"nome"=>"bete","curso"=>"tads"],
["id"=>2,"nome"=>"cleide","curso"=>"tbd"],
["id"=>3,"nome"=>"beto","curso"=>"tjd"]
];
echo"<br> id: " .$bd [1]["id"];
echo"<br> curso:  " .$bd[2]["curso"];
echo"<br> nome :" .$bd[0]["nome"];
/* 
2
tjd
bete
*/




?>