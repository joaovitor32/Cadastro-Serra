-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 24-Abr-2019 às 03:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CadastroSerra`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Acao`
--

CREATE TABLE `Acao` (
  `CodAcao` bigint(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Descricao` varchar(200) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Acao`
--

INSERT INTO `Acao` (`CodAcao`, `Nome`, `Descricao`, `Data`) VALUES
(1, 'Prospecao', 'Ajudou na prospecacao\r\n', '2019-04-18'),
(2, 'Prospecao', 'Ajudou na prospecacao\r\n', '2019-04-18'),
(3, 'Limpeza', 'afdsgfhdfjgmhnhgsrme lkeregsdhgjf gshmrwljNAMGSNF BDJGARRglkfgarKLWKNJBG AFHSGNKLAGÇKrçlLRKGAKNFHSKLHMFÇLGÇLFÇ]LGamklfnhsgklhmfçg]GMKAHNSKLMFLGÇÇL~LGçkmanhksg', '2019-04-11'),
(4, 'Limpeza', 'afdsgfhdfjgmhnhgsrme lkeregsdhgjf gshmrwljNAMGSNF BDJGARRglkfgarKLWKNJBG AFHSGNKLAGÇKrçlLRKGAKNFHSKLHMFÇLGÇLFÇ]LGamklfnhsgklhmfçg]GMKAHNSKLMFLGÇÇL~LGçkmanhksg', '2019-04-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `AcaoMembro`
--

CREATE TABLE `AcaoMembro` (
  `CodAcao` bigint(20) NOT NULL,
  `CodMembro` bigint(20) NOT NULL,
  `DataIni` date NOT NULL,
  `DataFim` date NOT NULL,
  `Atividades` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `AcaoMembro`
--

INSERT INTO `AcaoMembro` (`CodAcao`, `CodMembro`, `DataIni`, `DataFim`, `Atividades`) VALUES
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(1, 1, '2019-04-03', '2019-04-27', 'Ajudou em algo'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(2, 1, '2019-04-03', '2019-04-10', '12324213423rddfsbd'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh'),
(3, 1, '2019-04-19', '2019-04-13', 'dafsgdhfgfngffsafsgdhfmghdnfgsgffagsfdngfmhgffdgshdghfdmgfjh');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Evento`
--

CREATE TABLE `Evento` (
  `CodEvento` bigint(20) NOT NULL,
  `NomeEvento` varchar(70) NOT NULL,
  `Data` date NOT NULL,
  `Descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Evento`
--

INSERT INTO `Evento` (`CodEvento`, `NomeEvento`, `Data`, `Descricao`) VALUES
(1, 'Open Labs', '2019-04-27', 'Encontro de tecnologia'),
(2, 'Open Labs', '2019-04-27', 'Encontro de tecnologia'),
(3, 'Rg', '2019-04-01', 'fsdhgmhjklçk'),
(4, 'RP', '2019-04-18', 'sfsdgdhjghkjlk'),
(5, 'Rg', '2019-04-01', 'fsdhgmhjklçk'),
(6, 'RP', '2019-04-18', 'sfsdgdhjghkjlk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Login1`
--

CREATE TABLE `Login1` (
  `CodLogin` bigint(20) NOT NULL,
  `Login1` varchar(60) NOT NULL,
  `Senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Login1`
--

INSERT INTO `Login1` (`CodLogin`, `Login1`, `Senha`) VALUES
(1, 'Joao', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Joao', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Membro`
--

CREATE TABLE `Membro` (
  `CodMembro` bigint(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `AnoDeEntrada` text NOT NULL,
  `Cargo` varchar(60) NOT NULL,
  `Telefone` text NOT NULL,
  `CPF` text NOT NULL,
  `Rua` varchar(100) NOT NULL,
  `Numero` int(5) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Membro`
--

INSERT INTO `Membro` (`CodMembro`, `Nome`, `Curso`, `AnoDeEntrada`, `Cargo`, `Telefone`, `CPF`, `Rua`, `Numero`, `Email`, `DataNascimento`, `Bairro`, `Estado`) VALUES
(1, 'Joao', 'Engenharia da computação', '2016.1', 'Gerente', '1231313131', '17979807774', 'Rua José Aristides Pereira', 13, 'joaovitormunizlopes@gmail.com', '1997-03-13', 'Solares', 1),
(2, 'Boi Tião', 'Engenharia Mecânica', '2019-03-13', 'Gerente', '1213131', '2132433243', 'Point dos cornos', 24, 'corno.corno@gmail.corno.com', '2012-12-11', 'Curral dos corno', 1),
(5, 'Aristoteu', 'dsadfsgf', '2016', 'gerente', '1232432132435', '21324354213245', 'jose', 33345364, '', '0321-12-13', 'solares', 1),
(7, 'Aristoteu', 'dsadfsgf', '2016', 'gerente', '1232432132435', '21324354213245', 'jose', 33345364, '', '0321-12-13', 'solares', 1),
(8, 'Aretuza Lovi', 'dsadfsgf', '2016', 'gerente', '1232432132435', '213243541213245', 'jose', 33345364, '', '1321-03-12', 'solares', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `MembroEvento`
--

CREATE TABLE `MembroEvento` (
  `CodMembro` bigint(20) NOT NULL,
  `CodEvento` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `MembroEvento`
--

INSERT INTO `MembroEvento` (`CodMembro`, `CodEvento`) VALUES
(1, 2),
(1, 2),
(1, 5),
(1, 5),
(1, 6),
(1, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `MembroTreinamento`
--

CREATE TABLE `MembroTreinamento` (
  `CodMembro` bigint(20) NOT NULL,
  `CodTreinamento` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `MembroTreinamento`
--

INSERT INTO `MembroTreinamento` (`CodMembro`, `CodTreinamento`) VALUES
(1, 3),
(1, 3),
(1, 4),
(1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Projeto`
--

CREATE TABLE `Projeto` (
  `CodProjeto` bigint(20) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `DataIni` date NOT NULL,
  `DataFim` date NOT NULL,
  `Preco` int(11) NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Projeto`
--

INSERT INTO `Projeto` (`CodProjeto`, `Nome`, `DataIni`, `DataFim`, `Preco`, `Descricao`) VALUES
(1, 'Patamar', '2019-04-13', '2019-04-27', 12324354, 'deu ruim'),
(2, 'Girassol', '2019-04-06', '2019-12-19', 1212, 'ddfsdg'),
(3, 'Girassol', '2019-04-06', '2019-12-19', 1212, 'ddfsdg'),
(4, 'ChupaCuDeGoianinha', '2019-04-04', '2019-04-20', 21324, 'AFDmbfzdlxmbzfl flkçmlafsmbdgbx mlkbzçlflfdDLMmfadnsfz mvlmlbpflçmMF ANSFMBZMÇLKFPDFÇLMAM DSBZ,VMMBÇLLFD[?FÇMAdms ,bzvçlmdplf[AÇLMDMBZ VZ'),
(5, 'ChupaCuDeGoianinha', '2019-04-04', '2019-04-20', 21324, 'AFDmbfzdlxmbzfl flkçmlafsmbdgbx mlkbzçlflfdDLMmfadnsfz mvlmlbpflçmMF ANSFMBZMÇLKFPDFÇLMAM DSBZ,VMMBÇLLFD[?FÇMAdms ,bzvçlmdplf[AÇLMDMBZ VZ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ProjetoMembro`
--

CREATE TABLE `ProjetoMembro` (
  `CodMembro` bigint(20) NOT NULL,
  `CodProjeto` bigint(20) NOT NULL,
  `DataIniMembro` date NOT NULL,
  `DataFimMembro` date NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ProjetoMembro`
--

INSERT INTO `ProjetoMembro` (`CodMembro`, `CodProjeto`, `DataIniMembro`, `DataFimMembro`, `Cargo`) VALUES
(1, 1, '2019-04-13', '2019-04-27', 'Gerente'),
(1, 1, '2019-04-13', '2019-04-27', 'Gerente'),
(1, 2, '2019-04-09', '2019-04-26', 'Assessor'),
(1, 2, '2019-04-09', '2019-04-26', 'Assessor'),
(1, 5, '2019-04-12', '2019-04-27', 'Gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Treinamento`
--

CREATE TABLE `Treinamento` (
  `CodTreinamento` bigint(20) NOT NULL,
  `DuracaoDias` int(11) NOT NULL,
  `HorasTotais` int(11) NOT NULL,
  `TipoTreinamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Treinamento`
--

INSERT INTO `Treinamento` (`CodTreinamento`, `DuracaoDias`, `HorasTotais`, `TipoTreinamento`) VALUES
(1, 12, 1324, 'Javascript'),
(2, 123243, 1232435, 'Php'),
(3, 12, 1324, 'Javascript'),
(4, 123243, 1232435, 'Php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acao`
--
ALTER TABLE `Acao`
  ADD PRIMARY KEY (`CodAcao`);

--
-- Indexes for table `AcaoMembro`
--
ALTER TABLE `AcaoMembro`
  ADD KEY `CodAcao` (`CodAcao`,`CodMembro`),
  ADD KEY `CodMembro` (`CodMembro`);

--
-- Indexes for table `Evento`
--
ALTER TABLE `Evento`
  ADD PRIMARY KEY (`CodEvento`);

--
-- Indexes for table `Login1`
--
ALTER TABLE `Login1`
  ADD PRIMARY KEY (`CodLogin`);

--
-- Indexes for table `Membro`
--
ALTER TABLE `Membro`
  ADD PRIMARY KEY (`CodMembro`);

--
-- Indexes for table `MembroEvento`
--
ALTER TABLE `MembroEvento`
  ADD KEY `CodMembro` (`CodMembro`,`CodEvento`),
  ADD KEY `CodEvento` (`CodEvento`);

--
-- Indexes for table `MembroTreinamento`
--
ALTER TABLE `MembroTreinamento`
  ADD KEY `CodMemro` (`CodMembro`,`CodTreinamento`),
  ADD KEY `CodTreinamento` (`CodTreinamento`);

--
-- Indexes for table `Projeto`
--
ALTER TABLE `Projeto`
  ADD PRIMARY KEY (`CodProjeto`);

--
-- Indexes for table `ProjetoMembro`
--
ALTER TABLE `ProjetoMembro`
  ADD KEY `CodMembro` (`CodMembro`,`CodProjeto`),
  ADD KEY `CodProjeto` (`CodProjeto`);

--
-- Indexes for table `Treinamento`
--
ALTER TABLE `Treinamento`
  ADD PRIMARY KEY (`CodTreinamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Acao`
--
ALTER TABLE `Acao`
  MODIFY `CodAcao` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Evento`
--
ALTER TABLE `Evento`
  MODIFY `CodEvento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Login1`
--
ALTER TABLE `Login1`
  MODIFY `CodLogin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Membro`
--
ALTER TABLE `Membro`
  MODIFY `CodMembro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Projeto`
--
ALTER TABLE `Projeto`
  MODIFY `CodProjeto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Treinamento`
--
ALTER TABLE `Treinamento`
  MODIFY `CodTreinamento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `AcaoMembro`
--
ALTER TABLE `AcaoMembro`
  ADD CONSTRAINT `AcaoMembro_ibfk_1` FOREIGN KEY (`CodAcao`) REFERENCES `Acao` (`CodAcao`),
  ADD CONSTRAINT `AcaoMembro_ibfk_2` FOREIGN KEY (`CodMembro`) REFERENCES `Membro` (`CodMembro`);

--
-- Limitadores para a tabela `MembroEvento`
--
ALTER TABLE `MembroEvento`
  ADD CONSTRAINT `MembroEvento_ibfk_1` FOREIGN KEY (`CodMembro`) REFERENCES `Membro` (`CodMembro`),
  ADD CONSTRAINT `MembroEvento_ibfk_2` FOREIGN KEY (`CodEvento`) REFERENCES `Evento` (`CodEvento`);

--
-- Limitadores para a tabela `MembroTreinamento`
--
ALTER TABLE `MembroTreinamento`
  ADD CONSTRAINT `MembroTreinamento_ibfk_1` FOREIGN KEY (`CodMembro`) REFERENCES `Membro` (`CodMembro`),
  ADD CONSTRAINT `MembroTreinamento_ibfk_2` FOREIGN KEY (`CodTreinamento`) REFERENCES `Treinamento` (`CodTreinamento`);

--
-- Limitadores para a tabela `ProjetoMembro`
--
ALTER TABLE `ProjetoMembro`
  ADD CONSTRAINT `ProjetoMembro_ibfk_1` FOREIGN KEY (`CodMembro`) REFERENCES `Membro` (`CodMembro`),
  ADD CONSTRAINT `ProjetoMembro_ibfk_2` FOREIGN KEY (`CodProjeto`) REFERENCES `Projeto` (`CodProjeto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
