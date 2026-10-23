<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Cadastro de categoria</title> 
</head> 
    <body> 

    <form action="salvar_categoria" method="POST">                      
        <h1 class="titulo"><strong>Cadastro de cadegoria</strong></h1>   

        <div> 
            <label for="id_categoria">ID da categoria:</label>                 
            <input type="text" id="id_categoria" name="id_categoria" placeholder="Gerado automaticamente" > 
        </div> 
        <div> 
            <label for="nome">Nome:</label>                            
            <input type="text" id="nome" name="nome" required>         
        </div> 
        <div> 
                 <button type="submit">Cadastrar Produto</button> 
                 

</body> 
</html> 