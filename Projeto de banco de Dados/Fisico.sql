CREATE TABLE MK (
cnpj NUMERIC(10) PRIMARY KEY,
contato NUMERIC(10)
)

CREATE TABLE agenda (
cnpj NUMERIC(10),
cpf NUMERIC(10),
id_funcionario INTEGER,
FOREIGN KEY(cnpj) REFERENCES MK (cnpj)
)

CREATE TABLE Cliente (
nome VARCHAR(10),
telefone NUMERIC(10),
cpf NUMERIC(10) PRIMARY KEY,
senha VARCHAR(10),
email VARCHAR(10)
)

CREATE TABLE Funcionario (
nome VARCHAR(10),
cargo VARCHAR(10),
id_funcionario INTEGER PRIMARY KEY,
telefone NUMERIC(10)
)

ALTER TABLE agenda ADD FOREIGN KEY(cpf) REFERENCES Cliente (cpf)
ALTER TABLE agenda ADD FOREIGN KEY(id_funcionario) REFERENCES Funcionario (id_funcionario)
