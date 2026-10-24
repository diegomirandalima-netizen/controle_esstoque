<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> 
    <title>Cadastro de Produtos</title> 
</head>
<body> 

    <h2>Cadastrar Novo Produto</h2>

    <form action="cadastrar.php" method="POST"> 
        <p> 
            <label>Nome do Produto:</label><br> 
            <input type="text" name="nome" required> 
        </p> 

        <p> 
            <label>descricao:</label><br> 
            <input type="text" name="descricao" required>
        </p> 

        <p>
            <label>Preço:</label><br> 
            <input type="int" step="" name="preco" required>
        </p> 

        <p>
            <label>Quantidade:</label><br>
            <input type="number" name="quantidade" required> 
        </p>

        <p>
            <label>Fornecedor:</label><br> 
            <input type="text" name="fornecedor" required> 
        </p> 
        
        fornecedor:
        <select name="id_fornecedores">
        <?php
        require('conexao.php');
        $sql="SELECT id_fornecedores,nome FROM fornecedores";
        $result=mysqli_query($db,$sql)or die(mysql_error());
        echo"<option value='Selecione...'>Selecione...</option>";
        while($dados=mysqli_fetch_array($result)){
        echo"<option value='".utf8_encode($dados['id_fornecedores'])."'>".utf8_encode($dados['nome'])."</option>";
        }
        ?>
        categoria:
        <select name="id_categoria">
        <?php
        require('conexao.php');
        $sql="SELECT id_cadegoria,nome FROM cadegoria";
        $result=mysqli_query($db,$sql)or die(mysql_error());
        echo"<option value='Selecione...'>Selecione...</option>";
        while($dados=mysqli_fetch_array($result)){
        echo"<option value='".utf8_encode($dados['id_cadegoria'])."'>".utf8_encode($dados['nome'])."</option>";
        }
        ?>
        </select>
       

        <button type="submit">Cadastrar Produto</button> 

</body> 
</html> 
