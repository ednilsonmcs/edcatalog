USE edcatalogo

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    descricao VARCHAR(50),
    nomeMarca VARCHAR(50),
    ativo BOOLEAN
);