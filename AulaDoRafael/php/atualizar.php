<?php
include 'Conexao.php';

$sql = "UPDATE `gaveta` SET `id`=[11],`livro`=[PrimeiroLivro2],`quantidade`=[1] WHERE 1";
$result = $db->prepare($sql);
$result->execute();




?>