<?php                                                        // Inicia a tag de abertura do script PHP
include("conexao.php");                                      // Inclui e executa o arquivo que faz a conexao com o banco
$sql = "INSERT INTO categorias (nome) VALUES ('Ferramentas')";// Define a string com o comando SQL para inserir um registro
                                                             //
if ($conexao->query($sql) === TRUE) {                        // Executa a consulta e verifica se a insercao foi um sucesso
    echo "Nova categoria ('Ferramentas') cadastrada...";    // Exibe uma mensagem de sucesso na tela caso dê tudo certo
} else {                                                     // Define o caminho alternativo caso a consulta falhe
    echo "Erro ao cadastrar: " . $conexao->error;            // Exibe a mensagem com o erro detalhado retornado pelo banco
}                                                            // Fecha o bloco de condicao do if / else
$conexao->close();                                           // Encerra a conexao ativa com o banco de dados
?>  