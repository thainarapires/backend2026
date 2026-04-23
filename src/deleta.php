<?php
require_once 'conecta.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->execute([$_POST['id']]);
    header("Location: relatorio.php?msg=excluido");
    exit;
}?>
<form method="POST" action="delete.php">
    <input type="hidden" name="id_aluno" value="ID_AQUI">
    <button type="submit">Excluir</button>
</form>