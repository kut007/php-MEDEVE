CREATE DATABASE medeve CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE medeve;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    perfil VARCHAR(120) NOT NULL DEFAULT 'cliente',
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE contas (
    id_conta INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    descricao VARCHAR(255) NOT NULL,
    valor DECIMAL(13, 2) NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

