<?php
  //Iniciando Sessão
    session_start();

    //Verificar se a variavel entrar existe e se campo login e senha estiver preenchido
   if(isset($_POST['entrar']) && !empty($_POST['nome'])  && !empty($_POST['senha'])) 
    {
      //Conexão com o Banco de Dados 
      include_once('../config.php');

      
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];

        //Selicionar nome e senha da tabela cliente
      $sql = "SELECT * FROM cliente WHERE nome = '$nome' and senha = '$senha' ";

        //verifica recebe connection da pagina config.php
      $verifica = $connection->query($sql);

     //Caso o numero de linhas do $verifica for menor que 1
    if(mysqli_num_rows($verifica) < 1)
      {
        //Caso < que 1
          //Destrua qualquer variavel com nome e senha
        unset($_SESSION ['nome']);
        unset($_SESSION ['senha']);

          //Mostre o alert e redirecione para tela de login
        echo (
          "<script language='JavaScript'>
            window.alert('Nome e/ou senha incorretos')
          window.location.href='login.html';
            </script>");
      } 
      else
     {
      //Caso => que 1
      $_SESSION ['nome'] = $nome;
      $_SESSION ['senha'] = $senha;

        // entre na tela estoque.php
      header('Location: ../estoque/estoque.php');
      }
    }
    else
      {
        echo (
        "<script language='JavaScript'>
         window.alert('Por favor, preencha todos os campos')
          window.location.href='login.html';
          </script>");
      }
