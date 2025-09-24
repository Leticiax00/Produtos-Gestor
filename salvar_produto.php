<?php
include 'conexao.php';

$nome = $_POST['prodName'];
$quantidade = $_POST['prodQuantity'];
$preco = $_POST['prodPrice'];
$preco_custo = $_POST['prodCost'];

// Use prepared statements para evitar SQL Injection
$stmt = $conn->prepare("INSERT INTO produtos (nome, quantidade, preco, preco_custo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sidd", $nome, $quantidade, $preco, $preco_custo);

if ($stmt->execute()) {
    echo "Novo produto adicionado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>