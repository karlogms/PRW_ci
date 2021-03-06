
-- Host: 127.0.0.1:3307
-- Tempo de geração: 10-Mar-2022 às 04:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hello_stock`
--
CREATE DATABASE IF NOT EXISTS `hello_stock` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hello_stock`;

-- --------------------------------------------------------

create table 'teste'(
  'cod' int (2) not null,
  'nometeste' varchar (20) not null
)

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod` int(15) NOT NULL,
  `nome` varchar(95) DEFAULT NULL,
  `cpfcnpj` varchar(95) NOT NULL,
  `rgie` varchar(95) DEFAULT NULL,
  `social` varchar(95) DEFAULT NULL,
  `tipo` varchar(95) DEFAULT NULL,
  `cep` varchar(95) DEFAULT NULL,
  `endereco` varchar(95) DEFAULT NULL,
  `bairro` varchar(95) DEFAULT NULL,
  `fone` varchar(95) DEFAULT NULL,
  `cel` varchar(95) DEFAULT NULL,
  `email` varchar(95) DEFAULT NULL,
  `endumero` varchar(10) DEFAULT NULL,
  `cidade` varchar(18) DEFAULT NULL,
  `estado` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `com_cod` int(15) NOT NULL,
  `com_data` datetime DEFAULT NULL,
  `com_ntfiscal` int(11) DEFAULT NULL,
  `com_total` int(11) DEFAULT NULL,
  `com_nparcelas` int(11) DEFAULT NULL,
  `com_status` varchar(95) DEFAULT NULL,
  `for_cod` int(11) DEFAULT NULL,
  `tpa_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `for_cod` int(15) NOT NULL,
  `for_nome` varchar(95) DEFAULT NULL,
  `for_rsocial` varchar(95) DEFAULT NULL,
  `for_cnpj` varchar(95) DEFAULT NULL,
  `for_cep` varchar(95) DEFAULT NULL,
  `for_endereco` varchar(95) DEFAULT NULL,
  `for_bairro` varchar(95) DEFAULT NULL,
  `for_fone` varchar(95) DEFAULT NULL,
  `for_cel` varchar(95) DEFAULT NULL,
  `for_email` varchar(95) DEFAULT NULL,
  `for_endnumero` varchar(95) DEFAULT NULL,
  `for_cidade` varchar(95) DEFAULT NULL,
  `for_estado` varchar(95) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `pro_cod` smallint(15) NOT NULL,
  `pro_marca` varchar(50) DEFAULT NULL,
  `pro_item` varchar(95) DEFAULT NULL,
  `pro_cor` varchar(30) DEFAULT NULL,
  `pro_descricao` text DEFAULT NULL,
  `pro_valorpago` double DEFAULT NULL,
  `pro_valorvenda` double DEFAULT NULL,
  `umend_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`pro_cod`, `pro_marca`, `pro_item`, `pro_cor`, `pro_descricao`, `pro_valorpago`, `pro_valorvenda`, `umend_cod`) VALUES
(1, ' Coralina ', 'Tinta', 'Vermelho', 'Minicomponente de secagem ao ar. Produto com boa aderência e flexibilidade. ', 250, 320, 3000),
(2, ' Weg ', 'Tinta', 'Verde', 'Tinta de acabamento fenólico, bi componente, com pigmentação de alumínio, oferecendo refletância luminosa e resistência ao intemperismo.', 80, 150, 900),
(3, ' Weg ', 'Tinta', 'Violeta', 'Tinta de acabamento fenólico, bi componente, com pigmentação de alumínio, oferecendo refletância luminosa e resistência ao intemperismo', 200, 500, 3000),
(4, ' Coralina ', 'Tinta ', ' Laranja ', 'minicomponente, de secagem ao ar. Produto com boa aderência e flexibilidade.', 500, 800, 18000),
(5, 'Inodora ', 'Tinta ', 'Branca', ' não tem cheiro forte e é solúvel em água.', 180, 260, 900),
(6, ' Donno', 'Tinta', 'Amarelo ', 'Tem acabamento fosco, semibrilho ou acetinado.', 220, 430, 3000),
(7, ' Daddy', 'Tinta ', 'Azul marinho ', 'Seu acabamento é com alto brilho, porém há outras versões que resultam em fosca, acetinada ou metalizada.', 375, 520, 18000),
(8, ' Olinda ', 'Tinta', 'Rosa ', 'minicomponente, de secagem ao ar. Produto com boa aderência e flexibilidade.', 100, 200, 900),
(9, ' Divinally ', 'Tinta', ' Marrom', 'Acabamento de dois componentes , alto solido e alta espessura formulada a partir da resina.', 400, 550, 3),
(10, 'Oruc ', ' Tinta', ' Roxo', 'Tinta acrílica fosca para uso em paredes internas.\r\n\r\nIndicado para pintura de paredes internas de alvenaria, cerâmica não vitrificada.', 180, 280, 900),
(11, ' Moju ', ' Tinta', 'Preto Fosco', 'Super Lavável é uma tinta acrílica de alto desempenho, indicada para ambientes internos.', 245, 380, 900),
(12, 'Lumi ', 'Tintas', 'Prata Iluminado', 'um acabamento com brilho, alta resistência e fácil de limpar ', 80, 150, 900),
(13, 'Moju ', ' Tinta', 'Preto', 'Super Lavável é uma tinta acrílica de alto desempenho, indicada para ambientes internos.', 200, 340, 900),
(14, 'Lumi ', 'Tintas ', ' Prata', 'um acabamento com brilho, alta resistência e fácil de limpar ', 90, 160, 900);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo pagamento`
--

CREATE TABLE `tipo pagamento` (
  `tpa_cod` int(12) NOT NULL,
  `tpa_nome` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `und medida`
--

CREATE TABLE `und medida` (
  `umed_cod` int(15) NOT NULL,
  `umed_nome` varchar(95) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `ven_cod` int(15) NOT NULL,
  `ven_data` datetime DEFAULT NULL,
  `ven_nfiscal` int(11) DEFAULT NULL,
  `ven_total` double DEFAULT NULL,
  `ven_nparcelas` int(11) DEFAULT NULL,
  `ven_status` varchar(95) DEFAULT NULL,
  `cli_cod` int(11) DEFAULT NULL,
  `ven_avista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`com_cod`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`for_cod`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`pro_cod`);

--
-- Índices para tabela `tipo pagamento`
--
ALTER TABLE `tipo pagamento`
  ADD PRIMARY KEY (`tpa_cod`);

--
-- Índices para tabela `und medida`
--
ALTER TABLE `und medida`
  ADD PRIMARY KEY (`umed_cod`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`ven_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `com_cod` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `for_cod` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `pro_cod` smallint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tipo pagamento`
--
ALTER TABLE `tipo pagamento`
  MODIFY `tpa_cod` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `und medida`
--
ALTER TABLE `und medida`
  MODIFY `umed_cod` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `ven_cod` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;


