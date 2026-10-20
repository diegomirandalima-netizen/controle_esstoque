<?php                                                        // Inicia a tag de abertura do script PHP
$servidor = "localhost";                                     // Define o endereco do servidor do banco de dados
$usuario  = "root";                                          // Define o nome de usuario do banco de dados
$senha    = "";                                              // Define a senha do usuario do banco de dados
$banco    = "controle_estoque";                              // Define o nome do banco de dados a ser acessado
$conexao = new mysqli($servidor, $usuario, $senha, $banco);  // Cria uma nova conexao utilizando a extensao mysqli
if ($conexao->connect_error) {                               // Verifica se ocorreu algum erro durante a tentativa de conexao
    die("Erro ao conectar: " . $conexao->connect_error);     // Interrompe a execucao do script e mostra a mensagem de erro
}                                                            // Fecha o bloco de condicao do if
?>  