<?php

  if(isset($_POST['cadastrar'])) 
  {
    
  //Conexão com o Banco de Dados 
  include_once('../config.php'); 

  //Variaveis de cadastro
  $login = $_POST['login'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $doc = $_POST['doc'];
  $rsocial = $_POST['rsocial'];
  $contato = $_POST['contato'];
  $cep = $_POST['cep'];
  $endereco = $_POST['endereco'];
  $endnumero= $_POST['endnumero'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

  //Selecionar o Banco de Dados
  $select = mysqli_query($connection,"SELECT * FROM cliente");
  $array = mysqli_fetch_array($select);

  //If Else para login vazio
    if($login == "" || $login == null){
      echo"<script language='javascript' type='text/javascript'>
      alert('O campo login deve ser preenchido');
      window.location.href='cadastro.html';</script>";

      }
      else
      {

        //Geração de senha (Muito boa inclusive :) )
        function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
          $senha = "0"; // inicia a váriavel
          $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
          $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
          $nu = "0123456789"; // $nu contem os números
          $si = "!@#$%¨&*()_+="; // $si contem os símbolos

          if ($maiusculas){
                  // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
                  $senha .= str_shuffle($ma);
          }

              if ($minusculas){
                  // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
                  $senha .= str_shuffle($mi);
              }

              if ($numeros){
                  // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
                  $senha .= str_shuffle($nu);
              }

              if ($simbolos){
                  // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
                  $senha .= str_shuffle($si);
              }

              // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
              return substr(str_shuffle($senha),0,$tamanho);
          }

          $senhainc = gerar_senha(10, true, true, true, true); // criar a senha sem criptografia MD5
          $senhafull = MD5($senhainc); // passando para o MD5

          //Enviar informações ao Banco de dados
          $query = mysqli_query($connection,"INSERT INTO cliente (nome, cpfcnpj, social, cep, endereco, bairro, contato, email, endumero, cidade, estado, senha) VALUES ('$login','$doc','$rsocial','$cep','$endereco','$bairro','$contato','$email','$endnumero','$cidade','$estado','$senhafull')");
        }

      }
      else
      {
        echo "<h1>ERRO 404<h1> <br> Algo não esta funcionando :(";
      }
?>