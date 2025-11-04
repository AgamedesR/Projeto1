# Projeto1 da cadeira de Programção Web do 2° Período
# Aluno: Agamedes Rodrigues Meira de Castro Gomes
# RGM: 42834996

# Intrução: para cessar o banco de dados é só seguir a url -> http://localhost/Projeto1/admin/index.php

# Projeto explicado na sua documentação.

# Tabelas do Phpmyadmin
# Clientes (criada em sala)
# Categorias (Tema Escolhido)
CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  bairro VARCHAR(100) NOT NULL,
  tamanho VARCHAR(50) NOT NULL
);
    
INSERT INTO categorias (bairro, tamanho) VALUES
('Tambaú', 'Até 100 m²'),
('Tambaú', 'Até 200 m²'),
('Manaíra', 'Até 300 m²'),
('Bessa', 'Acima de 300 m²'),
('Cabo Branco', 'Até 200 m²');
