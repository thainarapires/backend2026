<?php
$idade = 16;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>
<hr>
<?php
$hora = 15;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>
<hr>
<?php
    $semaforo = "amarelo";
    if ($semaforo == "verde"){
        echo "Vai com deus";
    }elseif ($semaforo == "amarelo"){
        echo "Vai que da tempo";
    }elseif($semaforo == "vemelho"){ 
        echo "Para ai nao vai dar nao";
    }else{
        echo "Aligenigena";
    }


?>
<hr>
<?php 
$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;
?>

<hr>

<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<hr>

<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');  
echo ("<br>");// Exemplo de saída: 08/10/2024 14:35:20
echo date('d/m/Y'), (" às "), date('H:i:s') ;  // Exemplo de saída: 08/10/2024 14:35:20

?>
<hr>


<?php
$senha = 'minhaSenhaSecreta';

// Hash armazenado no banco de dados
$hash_armazenado = password_hash($senha, PASSWORD_DEFAULT);

// Usuário digita a senha
$senha_digitada = 'minhaSenhaSecreta';

// Verifica se a senha está correta
if (password_verify($senha_digitada, $hash_armazenado)) {
    echo 'Senha correta!';
} else {
    echo 'Senha incorreta!';
}
?>

         