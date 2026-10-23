<?php

require "conexao.php";

$stmt = $conexao->prepare(
    "UPDATE mensagens
     SET nome = ?, email = ?, mensagem = ?
     WHERE id = ?"
);

$stmt->execute([
    $_POST["nome"],
    $_POST["email"],
    $_POST["mensagem"],
    $_POST["id"]
]);

echo "Mensagem atualizada com sucesso!";

?>
