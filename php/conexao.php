<?php

$conexao = new PDO(
    "mysql:host=localhost;dbname=garage_classics",
    "root",
    ""
);

$conexao->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

?>
