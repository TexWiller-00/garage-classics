<?php

require "conexao.php";

$stmt = $conexao->prepare(
    "INSERT INTO mensagens (nome, email, mensagem)
     VALUES (?, ?, ?)"
);

$stmt->execute([
    $_POST["nome"],
    $_POST["email"],
    $_POST["mensagem"]
]);

echo "Mensagem cadastrada com sucesso!";

?>
