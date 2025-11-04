# Projeto1 da cadeira de Programção Web do 2° Período
# Aluno: Agamedes Rodrigues Meira de Castro Gomes
# RGM: 42834996

# Tabelas do Phpmyadmin
# Clientes (criada em sala)

# Categorias
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `tamanho` varchar(50) NOT NULL
)

INSERT INTO `categorias` (`id`, `bairro`, `tamanho`) VALUES
(1, 'Tambaú', 'Até 100 m²'),
(2, 'Tambaú', 'Até 200 m²'),
(3, 'Manaíra', 'Até 300 m²'),
(4, 'Bessa', 'Acima de 300 m²'),
(5, 'Cabo Branco', 'Até 200 m²'),
(6, ' Bancários', 'Até 100m²'),
(7, 'Aeroclube', 'Até 100m²');
