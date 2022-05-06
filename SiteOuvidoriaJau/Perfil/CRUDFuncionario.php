<--! ID INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOME CHAR (50) NOT NULL,
SOBRENOME CHAR (50) NOT NULL,
EMAIL CHAR (100) NOT NULL unique,
SENHA CHAR (12) NOT NULL,
ATIVO BOOL NOT NULL-->

<?php
          include_once('conexao.php');          
          // recuperando
          $nomefuncionario  = $_POST['Nome_Funcionario']
          $sobrenomefuncionario  = $_POST['Sobrenome_Funcionario']          
          $email = $_POST['Email_Funcionario'];
          $senha = $_POST['Senha_Funcionario'];
          $sqlinsert = "insert into funcionario (Nome_Funcionario, Sobrenome_Funcionario, Email_Funcionario, Senha_Funcionario)
                        values ('$nomefuncionario', '$sobrenomefuncionario', '$email', '$senha')";
          

          $resultado = mysqli_query($conexao, $sqlinsert);
          if (!$resultado){
            die ('Query Invalida: ' .mysqli_error($conexao));
          }
          else{
            echo "Registro Cadastrado com sucesso!";
          }
          mysqli_close($conexao);
?>