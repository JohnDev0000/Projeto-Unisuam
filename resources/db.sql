CREATE TABLE usuarios (
                          id INT AUTO_INCREMENT PRIMARY KEY,
                          nome VARCHAR(100) NOT NULL,
                          data_nascimento DATE NOT NULL,
                          sexo ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
                          nome_materno VARCHAR(100) NOT NULL,
                          cpf VARCHAR(14) NOT NULL,
                          telefone_celular VARCHAR(15) NOT NULL,
                          telefone_fixo VARCHAR(15),
                          endereco VARCHAR(255) NOT NULL,
                          complemento VARCHAR(255),
                          login VARCHAR(50) NOT NULL UNIQUE,
                          senha VARCHAR(255) NOT NULL,
                          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);