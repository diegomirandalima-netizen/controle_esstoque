<?php 
include("conexao.php"); // Inclui e executa o arquivo que faz a conexao com o banco

// Define a string com o comando SQL para buscar dados relacionando as tabelas
$sql = "SELECT 
            preco.id_produto, 
            preco.nome AS produto_nome, 
            preco.descricao, 
            preco.quantidade, 
            preco.preco, 
            categoria.nome AS categoria_nome, 
            fornecedor.nome AS fornecedor_nome 
        FROM produtos preco
        INNER JOIN categorias c ON preco.id_categoria = categoria.id_categoria
        INNER JOIN fornecedores f ON preco.id_fornecedor = fornecedor.id_fornecedor";

$resultado = $conexao->query($sql); // Executa o comando SELECT e armazena os dados encontrados
?> 

<!DOCTYPE html> <
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Controle de Estoque - Produtos Cadastrados</title> <!-- Define o titulo da aba do navegador -->
    <link rel="stylesheet" href="estilo.css"> <!-- Vincula o arquivo CSS externo que contem a definicao visual -->
</head> 
<body>

    <h2>Produtos no Controle de Estoque</h2> <!-- Insere um titulo em destaque na pagina -->

    <table> <!-- Abre a tag de criacao da tabela de dados -->
        <thead> <!-- Abre o cabecalho estrutural com os titulos das colunas -->
            <tr> <!-- Cria a linha que vai conter os titulos das colunas -->
                <th>ID</th>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Fornecedor</th>
            </tr> <!-- Fecha a linha de titulos do cabecalho -->
        </thead> <!-- Fecha o cabecalho estrutural da tabela -->
        <tbody> <!-- Abre o corpo estrutural onde os dados serao listados -->
            <?php // Inicia um novo bloco de codigo PHP dentro da tabela
            
            // Verifica se a busca no banco retornou pelo menos uma linha
            if ($resultado->num_rows > 0) {
                // Inicia um laco que percorre cada registro retornado transformando em array associativo
                while($linha = $resultado->fetch_assoc()) {
                    echo "<tr>"; // Imprime a tag HTML de abertura para uma nova linha
                    echo "<td>" . $linha["id_produto"] . "</td>"; // Exibe o ID do produto dentro da celula
                    echo "<td>" . $linha["produto_nome"] . "</td>"; // Exibe o nome do produto dentro da celula
                    echo "<td>" . $linha["descricao"] . "</td>"; // Exibe a descricao do produto dentro da celula
                    echo "<td>" . $linha["quantidade"] . "</td>"; // Exibe a quantidade do produto dentro da celula
                    
                    // Formata o preco para o padrao de moeda Real (R$) e exibe na celula com a classe de estilo
                    echo "<td class='preco'>R$ " . number_format($linha["preco"], 2, ',', '.') . "</td>";
                    
                    echo "<td>" . $linha["categoria_nome"] . "</td>"; // Exibe o nome da categoria dentro da celula
                    echo "<td>" . $linha["fornecedor_nome"] . "</td>"; // Exibe o nome do fornecedor dentro da celula
                    echo "</tr>"; // Imprime a tag HTML de fechamento para a linha atual
                } // Fecha o laco de repeticao do while
            } else { // Define a acao alternativa caso nao existam produtos cadastrados
                // Exibe uma linha com uma celula unica ocupando o espaco de 7 colunas avisando que a lista esta vazia
                echo "<tr><td colspan='7' style='text-align:center;'>Nenhum produto encontrado.</td></tr>";
            } // Fecha o bloco de condicao do if / else
            ?> <!-- Informa o encerramento do bloco de codigo PHP interno da tabela -->
        </tbody> <!-- Fecha o corpo estrutural da tabela de dados -->
    </table> <!-- Fecha a tag de criacao da tabela de dados -->

</body>
</html> 

<?php // Inicia o ultimo bloco de codigo PHP do script para limpeza e seguranca
$conexao->close(); // Encerra de forma limpa a conexao ativa com o banco de dados
?> 
