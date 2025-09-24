<?php
include 'conexao.php'; // Inclui a conexão

// Dados do novo produto
$nome = "Smartphone";
$quantidade = 50;
$preco = 2500.00;
$preco_custo = 2000.00;

// Comando SQL para inserir dados
$sql = "INSERT INTO produtos (nome, quantidade, preco, preco_custo) 
        VALUES ('$nome', '$quantidade', '$preco', '$preco_custo')";

if ($conn->query($sql) === TRUE) {
    echo "Novo produto adicionado com sucesso!";
} else {
    echo "Erro ao adicionar produto: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>