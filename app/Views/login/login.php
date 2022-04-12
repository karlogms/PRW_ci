<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <link rel="stylesheet" href="css/estilolog.css">
</head>

<body>


  <!--Essa é a imagem do lado do formulario-->
  <div class="container">
    <div class="form-image">
      <img src="Nossa logo" </div>
    </div> <!--fim img-->

    <div class="form">
      <form action="valid_login.php" method="post">

        <div class="form-header">
          <div class="title">
            <h1>Login</h1>
          </div>
        </div>

        <div class="input-box">
          <label>Nome</label>
          <input type="text" required placeholder="Digite seu nome">
        </div>

        <div class="input-box">
          <label>Senha</label>
          <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
        </div>

        <div class="login-button">
          <button input type="submit" value="Login" href="home">Entrar</button>
        </div>

        
        <div class="login-button">
          <a href='../'>Voltar</a>
        </div>

      </form> <!--fim form-->

    </div> <!--fim class do form-->

</body>

</html>