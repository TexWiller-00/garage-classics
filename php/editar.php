<?php

require "conexao.php";

$id = $_GET["id"];

$stmt = $conexao->prepare("SELECT * FROM mensagens WHERE id = ?");
$stmt->execute([$id]);
$mensagem = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensagem - Garage Classics</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<main>
    <section class="secao">
        <div class="container">
            <p class="eyebrow">BACK-END</p>
            <h1 class="titulo-secao">EDITAR MENSAGEM</h1>

            <form class="formulario" action="atualizar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $mensagem["id"]; ?>">

                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" value="<?php echo htmlspecialchars($mensagem["nome"]); ?>">

                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($mensagem["email"]); ?>">

                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="7"><?php echo htmlspecialchars($mensagem["mensagem"]); ?></textarea>

                <button class="botao" type="submit">ATUALIZAR</button>
            </form>
        </div>
    </section>
</main>

</body>
</html>
