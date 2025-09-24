<?php
$servername = "localhost"; // nome do servidor 
$username = "root";       // nome do usuario php admin 
$password = "";           // senha do BD
$dbname = "mega-offer";   // banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão falhou
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>