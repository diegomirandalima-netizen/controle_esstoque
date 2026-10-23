<?php 
include("conexao.php"); 
$nome       = $_POST['nome'];    
$telefone  = $_POST['telefone']; 
$email = $_POST['Email'];

$SQL = "INSERT INTO fornecedores ('','nome', 'telefone', 'email') VALUES ('','$nome', '$telefone', '$email')"; 
if ($conexao->query($SQL) === true) {
    echo "Produto cadastrado com sucesso!"; 
} else { 
    echo "Erro ao cadastrar produto: " . $conexao->error; 
} 

?>