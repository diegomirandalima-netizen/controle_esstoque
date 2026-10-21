<?php 
include("conexao.php"); 
$nome       = $_POST['nome'];       
$categoria  = $_POST['categoria'];  
$preco      = $_POST['preco'];      
$quantidade = $_POST['quantidade']; 
$fornecedor = $_POST['fornecedor']; 
$SQL = "INSERT INTO produtos (nome, categoria, preco, quantidade, fornecedor) 
        VALUES ('$nome', '$categoria', '$preco', '$quantidade', '$fornecedor')"; 
if ($conexao->query($SQL) === true) { 
    echo "Produto cadastrado com sucesso!"; 
} else {
    echo "Erro ao cadastrar produto: " . $conexao->error; 
}
?>