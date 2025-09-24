<?php
include 'conexao.php';

$sql = "SELECT id, nome, quantidade, preco, preco_custo, data_cadastro FROM produtos";
$result = $conn->query($sql);

$html = '<table><thead><tr><th>ID</th><th>Nome</th><th>Quantidade</th><th>Preço de Venda</th><th>Preço de Custo</th><th>Data de Cadastro</th></tr></thead><tbody>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>" . htmlspecialchars($row["id"]) . "</td>";
        $html .= "<td>" . htmlspecialchars($row["nome"]) . "</td>";
        $html .= "<td>" . htmlspecialchars($row["quantidade"]) . "</td>";
        $html .= "<td>R$ " . number_format($row["preco"], 2, ',', '.') . "</td>";
        $html .= "<td>R$ " . number_format($row["preco_custo"], 2, ',', '.') . "</td>";
        $html .= "<td>" . htmlspecialchars($row["data_cadastro"]) . "</td>";
        $html .= "</tr>";
    }
} else {
    $html .= "<tr><td colspan='6'>Nenhum produto cadastrado.</td></tr>";
}

$html .= '</tbody></table>';

$conn->close();
echo $html;
?>