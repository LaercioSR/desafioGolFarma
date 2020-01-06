CREATE DATABASE laerciorios;

USE laerciorios;

CREATE TABLE especialidades (
    idEspecialidade INT AUTO_INCREMENT,
    descricao VARCHAR(25) NOT NULL UNIQUE,
    PRIMARY KEY (idEspecialidade)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE medicos (
    idMedico INT AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
    crm VARCHAR(13) NOT NULL UNIQUE,
    telefone VARCHAR(15),
    PRIMARY KEY (idMedico)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE medico_especialidade (
    idEspecialidade INT NOT NULL,
    idMedico INT NOT NULL,
    FOREIGN KEY (idEspecialidade) REFERENCES especialidades(idEspecialidade),
    FOREIGN KEY (idMedico) REFERENCES medicos(idMedico)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
