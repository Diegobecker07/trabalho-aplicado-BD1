drop DATABASE if EXISTS bigcursos;
create DATABASE bigcursos;
use bigcursos;

/* Modelo Lógico - Big Cursos: */

CREATE TABLE USUARIO (
    nome varchar(50) not null,
    dt_nasc date not null,
    sexo char(1) not null,
    cpf varchar(11) not null PRIMARY KEY,
    tipo_usuario enum('adm', 'fin', 'dir', 'sec') not null,
    num_telefone varchar(20),
    email varchar(150) not null,
    senha varchar(50) not null
);

CREATE TABLE ENDERECO (
    id_endereco int auto_increment PRIMARY KEY,
    estado char(2),
    cidade varchar(50),
    bairro varchar(50),
    logradouro varchar(50),
    numero varchar(10),
    complemento varchar(50),
    fk_matricula int UNIQUE
);


CREATE TABLE CURSO (
    idcurso int auto_increment PRIMARY KEY,
    modalidade enum('presencial', 'online') not null,
    nome varchar(50) not null,
    carga_horaria time not null
);

CREATE TABLE TURMA (
    codturma varchar(10) not null PRIMARY KEY,
    data_inicio date not null,
    numvagas int not null,
    fk_cpf varchar(11),
    fk_idcurso int,
    finalizada enum('1', '0') not null
);

CREATE TABLE ALUNO (
    cpf varchar(11),
    Nome varchar(50),
    dt_nasc date,
    sexo char(1),
    matricula int auto_increment PRIMARY KEY
);

CREATE TABLE PROFESSOR (
    cpf varchar(11) not null PRIMARY KEY,
    nome varchar(50) not null,
    email varchar(150) not null,
    senha varchar(50) not null,
    num_telefone varchar(20),
    dt_nasc date not null,
    rg varchar(15) not null
);

CREATE TABLE ALUNO_CURSO (
    id_aluno_curso int auto_increment not null PRIMARY KEY,
    fk_matricula int,
    fk_codturma varchar(10),
    pag_efetivado enum('1', '0') not null
);

CREATE TABLE CHAMADA (
    idchamada int auto_increment PRIMARY KEY,
    horas_aula time not null,
    fk_id_aluno_curso int UNIQUE
);

CREATE TABLE CERTIFICADO (
    id_certificado int auto_increment PRIMARY KEY,
    fk_id_aluno_curso int UNIQUE, 
    apto enum('1', '0') not null
);

CREATE TABLE LOCAL_CURSO (
    idlocalcurso int auto_increment PRIMARY KEY,
    estado char(2) not null,
    cidade varchar(50) not null,
    bairro varchar(50) not null,
    logradouro varchar(50) not null,
    numero varchar(10) not null,
    complemento varchar(150) not null,
    fk_codturma varchar(10)
);

ALTER TABLE ENDERECO ADD CONSTRAINT fk_aluno_endereco
    FOREIGN KEY (fk_matricula)
    REFERENCES ALUNO (matricula);

ALTER TABLE TURMA ADD CONSTRAINT fk_cpfprof_turma
    FOREIGN KEY (fk_cpf)
    REFERENCES PROFESSOR (cpf);
 
ALTER TABLE TURMA ADD CONSTRAINT fk_curso_turma
    FOREIGN KEY (fk_idcurso)
    REFERENCES CURSO (idcurso);
 
ALTER TABLE ALUNO_CURSO ADD CONSTRAINT fk_aluno_alunocurso
    FOREIGN KEY (fk_matricula)
    REFERENCES ALUNO (matricula);
 
ALTER TABLE ALUNO_CURSO ADD CONSTRAINT fk_alunocurso_turma
    FOREIGN KEY (fk_codturma)
    REFERENCES TURMA (codturma);
 
ALTER TABLE CHAMADA ADD CONSTRAINT fk_alunocurso_chamada
    FOREIGN KEY (fk_id_aluno_curso)
    REFERENCES ALUNO_CURSO (id_aluno_curso);
 
ALTER TABLE CERTIFICADO ADD CONSTRAINT fk_certificado_alunocurso
    FOREIGN KEY (fk_id_aluno_curso)
    REFERENCES ALUNO_CURSO (id_aluno_curso);
 
ALTER TABLE LOCAL_CURSO ADD CONSTRAINT fk_local_turma
    FOREIGN KEY (fk_codturma)
    REFERENCES TURMA (codturma);