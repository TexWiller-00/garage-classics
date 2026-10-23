<?php

require "conexao.php";

$stmt = $conexao->query("SELECT * FROM mensagens");
$mensagens = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens - Garage Classics</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
    <div class="container">
        <nav class="nav">
            <a class="logo" href="../index.html">
                <span class="logo-mark">GC</span>
                <span class="logo-text">GARAGE CLASSICS</span>
            </a>
            <ul class="nav-links">
                <li><a href="../index.html">INÍCIO</a></li>
                <li><a href="../pages/veiculos.html">VEÍCULOS</a></li>
                <li><a href="../pages/garagem.html">NOSSA GARAGEM</a></li>
                <li><a href="../pages/historia.html">HISTÓRIA</a></li>
                <li><a href="../pages/contato.html">CONTATO</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="secao">
        <div class="container">
            <p class="eyebrow">BACK-END</p>
            <h1 class="titulo-secao">MENSAGENS</h1>
            <p class="subtitulo">Mensagens cadastradas no banco de dados.</p>
            <div class="linha-decorativa"></div>

            <?php foreach ($mensagens as $mensagem) { ?>
                <article class="card">
                    <div class="card-conteudo">
                        <h2><?php echo htmlspecialchars($mensagem["nome"]); ?></h2>
                        <p>Email: <?php echo htmlspecialchars($mensagem["email"]); ?></p>
                        <p><?php echo htmlspecialchars($mensagem["mensagem"]); ?></p>
                        <p>Data: <?php echo htmlspecialchars($mensagem["data_envio"]); ?></p>
                        <p>
                            <a class="botao" href="editar.php?id=<?php echo $mensagem["id"]; ?>">EDITAR</a>
                            <a class="botao" href="excluir.php?id=<?php echo $mensagem["id"]; ?>">EXCLUIR</a>
                        </p>
                    </div>
                </article>
            <?php } ?>
        </div>
    </section>
</main>

</body>
</html>
