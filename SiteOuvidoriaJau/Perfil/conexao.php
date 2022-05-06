<?php
$nome_servidor = "br536.hostgator.com.br";
$nome_usuario = "dsetec86_ouvido";
$senha = "etecjau";
$nome_banco = "ouvidoria";


$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

if(mysqli_connect_error()){
echo " Problemas com a conexão com o Banco de Dados ".mysqli_connect_error();
  
}

else{	
echo "Deu Certo!";
}
?>