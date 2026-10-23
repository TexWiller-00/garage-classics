<?php

require "conexao.php";

$stmt = $conexao->prepare("DELETE FROM mensagens WHERE id = ?");
$stmt->execute([$_GET["id"]]);

echo "Mensagem excluída com sucesso!";

?>
