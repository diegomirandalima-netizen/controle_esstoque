<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Cadastro de produtos</title> 
</head> 
    <body> 

    <form action="salvar_produtos" method="POST">
        <h1 class="titulo"><strong>Cadastro de produtos</strong></h1> 

        <div> 
            <label for="id_produtos">ID do produto:</label>               
            <input type="text" id="id_produtos" name="id_produtos" placeholder="Gerado automaticamente" >
        </div> 
        <div> 
            <label for="nome">Nome:</label>                            
            <input type="text" id="nome" name="nome" required> 
        </div>
        <div> 
            <label for="descricao">descricao:</label>                            
            <input type="text" id="descricao" name="descricao" required> 
        </div>
<div> 
            <label for="quantidade">quantidade:</label>                            
            <input type="text" id="quantidade" name=”quantidade" required>
        </div> 
<div> 
            <label for="preco">preco:</label>                            
            <input type="text" id="preco" name=”preco" required>
        </div>
