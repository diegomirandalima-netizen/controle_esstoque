<?php 
include("conexao.php"); 
$nome       = $_POST['nome'];    
$id_categoria  = $_POST['']; 


$SQL = "INSERT INTO categoria (nome,'') VALUES ('','$nome')"; 
if ($conexao->query($SQL) === true) {
    echo "Produto cadastrado com sucesso!"; 
} else { 
    echo "Erro ao cadastrar produto: " . $conexao->error; 
} 

?>