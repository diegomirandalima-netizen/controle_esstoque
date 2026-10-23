<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="conexao.php"> 
    <title>Cadastro do fornecedores</title> 
</head> 
    <body> 

    <form action="salvar_fornecedor" method="POST">
        <h1 class="titulo"><strong>Cadastro do fornecedor</strong></h1> 

        <div> 
            <label for="id_fornecedor">ID do fornecedor:</label>               
            <input type="text" id="id_fornecedor" name="id_fornecedor" placeholder="Gerado automaticamente" >
        </div> 

        <div> 
            <label for="nome">Nome:</label>                            
            <input type="text" id="nome" name="nome" required> 
        </div> 

        <div> 
            <label for="telefone">Telefone:</label>                    
            <input type="tel" id="telefone" name="telefone">   
        </div> 

        <div> 
            <label for="email">Email:</label>                           
            <input type="email" id="email" name="email">      
        </div> 
             <button type="submit">Cadastrar Produto</button> 

</body> 
</html> 
