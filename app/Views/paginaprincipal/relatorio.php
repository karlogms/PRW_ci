<!DOCTYPE html>
<html lang="PT_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabela_relatorio.css">
    <title>Document</title>
</head>
<body>


    <?php 

    include('..\config.php');
    
    // cria a instrução SQL que vai selecionar os dados
    $query = ("SELECT colaborador, online, total_vendido_d, total_vendido_m FROM relatorio");
    // executa a query
    $dados = mysqli_query($connection, $query);
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
  
    ?>

    <?php
      // se o número de resultados for maior que zero, mostra os dados
      if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
    ?>

    <div class="visual"><!-- PARTE VISUAL DA TABELA -->
  
        <div class="tabela"><!-- TABELA -->
          
          <div class="colunas cabeçalho"><!-- COLUNAS E CABEÇALHO -->
            <div class="coluna"><!-- COLUNA -->
              Colaborador
            </div>
            <div class="coluna"><!-- COLUNA -->
              Horas Online
            </div>
            <div class="coluna"><!-- COLUNA -->
              Total Vendido (diario)
            </div>
            <div class="coluna"><!-- COLUNA -->
              Total Vendido (Mensal)
            </div>
          </div>
          
            <div class="colunas"><!-- COLUNAS -->
              <div class="coluna" data-title="nome"><!-- COLUNA -->
                <p><?=$linha['colaborador']?></p>
              </div>
              <div class="coluna" data-title="data nasc"><!-- COLUNA -->
                <p><?=$linha['online']?></p>
              </div>
              <div class="coluna" data-title="ocupação"><!-- COLUNA -->
              <p><?=$linha['total_vendido_d']?></p>
              </div>
              <div class="coluna" data-title="localização"><!-- COLUNA -->
              <p><?=$linha['total_vendido_m']?></p>
              </div>
            </div>

            <?php
                // finaliza o loop que vai mostrar os dados
                }while($linha = mysqli_fetch_assoc($dados));
              // fim do if
              }
            ?>
          
        </div>

        <!-- Teste -->
        
        <div class="tabela"><!-- TABELA -->
          
          <div class="colunas cabeçalho roxo"><!-- COLUNAS, CABEÇALHO E A TABELA ROXA -->
            <div class="coluna">
              Produto
            </div>
            <div class="coluna"><!-- COLUNA -->
              Valor Unitário
            </div>
            <div class="coluna"><!-- COLUNA -->
              Quantidade
            </div>
            <div class="coluna"><!-- COLUNA -->
              Data de Venda
            </div>
            <div class="coluna"><!-- COLUNA -->
              Status
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="produto"><!-- COLUNA -->
              Tinta Suvinil Branca
            </div>
            <div class="coluna" data-title="valor unitario"><!-- COLUNA -->
              R$150,00
            </div>
            <div class="coluna" data-title="quantidade"><!-- COLUNA -->
              2
            </div>
            <div class="coluna" data-title="data venda"><!-- COLUNA -->
              03/11/2022
            </div>
            <div class="coluna" data-title="status"><!-- COLUNA -->
              Aguardando a coleta do produto
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="produto"><!-- COLUNA -->
              Tinta Suvinil Branca
            </div>
            <div class="coluna" data-title="valor unitario"><!-- COLUNA -->
              R$150,00
            </div>
            <div class="coluna" data-title="quantidade"><!-- COLUNA -->
              2
            </div>
            <div class="coluna" data-title="data venda"><!-- COLUNA -->
              03/11/2022
            </div>
            <div class="coluna" data-title="status"><!-- COLUNA -->
              Aguardando a coleta do produto
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="produto"><!-- COLUNA -->
              Tinta Suvinil Branca
            </div>
            <div class="coluna" data-title="valor unitario"><!-- COLUNA -->
              R$150,00
            </div>
            <div class="coluna" data-title="quantidade"><!-- COLUNA -->
              2
            </div>
            <div class="coluna" data-title="data venda"><!-- COLUNA -->
              03/11/2022
            </div>
            <div class="coluna" data-title="status"><!-- COLUNA -->
              Aguardando a coleta do produto
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="produto"><!-- COLUNA -->
              Tinta Suvinil Branca
            </div>
            <div class="coluna" data-title="valor unitario"><!-- COLUNA -->
              R$150,00
            </div>
            <div class="coluna" data-title="quantidade"><!-- COLUNA -->
              2
            </div>
            <div class="coluna" data-title="data venda"><!-- COLUNA -->
              03/11/2022
            </div>
            <div class="coluna" data-title="status"><!-- COLUNA -->
              Aguardando a coleta do produto
            </div>
          </div>
          
        </div>
        
        <div class="tabela"><!-- TABELA -->
          
          <div class="colunas cabeçalho azul"><!-- COLUNAS, CABEÇALHO E A TABELA AZUL -->
            <div class="coluna"><!-- COLUNA -->
              Usuário
            </div>
            <div class="coluna"><!-- COLUNA -->
              Email
            </div>
            <div class="coluna"><!-- COLUNA -->
              Ativo
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="usuario"><!-- COLUNA -->
              usuario123
            </div>
            <div class="coluna" data-title="email"><!-- COLUNA -->
              usuario1234@hotmail.com
            </div>
            <div class="coluna" data-title="ativo"><!-- COLUNA -->
              Sim
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="usuario"><!-- COLUNA -->
              usuario123
            </div>
            <div class="coluna" data-title="email"><!-- COLUNA -->
              usuario1234@hotmail.com
            </div>
            <div class="coluna" data-title="ativo"><!-- COLUNA -->
              Sim
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="usuario"><!-- COLUNA -->
              usuario123
            </div>
            <div class="coluna" data-title="email"><!-- COLUNA -->
              usuario1234@hotmail.com
            </div>
            <div class="coluna" data-title="ativo"><!-- COLUNA -->
              Sim
            </div>
          </div>
          
          <div class="colunas"><!-- COLUNAS -->
            <div class="coluna" data-title="usuario"><!-- COLUNA -->
              usuario123
            </div>
            <div class="coluna" data-title="email"><!-- COLUNA -->
              usuario1234@hotmail.com
            </div>
            <div class="coluna" data-title="ativo"><!-- COLUNA -->
              Sim
            </div>
          </div>
          
        </div>
        
      </div>
</body>
</html>