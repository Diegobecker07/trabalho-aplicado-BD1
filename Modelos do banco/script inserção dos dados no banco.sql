use bigcursos;

INSERT INTO usuario (nome, dt_nasc, sexo, cpf, tipo_usuario, num_telefone, email, senha) values (
	'Diego Becker',
	20000806,
	'M',
	'03867444080',
	'adm',
	'49989266636',
	'diegoluizbecker@gmail.com',
	'diego1234'
);

INSERT INTO usuario (nome, dt_nasc, sexo, cpf, tipo_usuario, num_telefone, email, senha) values (
	'Alexandre Frota',
	19900914,
	'M',
	'95037499850',
	'fin',
	'9999999999',
	'andersonfrota@gmail.com',
	'anderson1234'
);

INSERT INTO usuario (nome, dt_nasc, sexo, cpf, tipo_usuario, num_telefone, email, senha) values (
	'Kauane Silva',
	19801212,
	'F',
	'52893099847',
	'dir',
	'34543456353',
	'kauanesilva@gmail.com',
	'kauane1234'
);

INSERT INTO usuario (nome, dt_nasc, sexo, cpf, tipo_usuario, num_telefone, email, senha) values (
	'Michel Themer',
	19930908,
	'M',
	'48395766409',
	'sec',
	'99999999999',
	'michelt@gmail.com',
	'michel1234'
);

INSERT INTO professor(cpf, nome, email, senha, num_telefone, dt_nasc, rg) VALUES(
	'96473645680',
	'Denio Santiago',
	'deniosantiago@gmail.com',
	'denio1234',
	'8744837483',
	'19970309',
	'1234532'
);

INSERT INTO professor(cpf, nome, email, senha, num_telefone, dt_nasc, rg) VALUES(
	'64583755690',
	'Arthur Marcos',
	'arthurmarcos@gmail.com',
	'arthur1234',
	'2345234221',
	'19700420',
	'34234242'
);

INSERT INTO professor(cpf, nome, email, senha, num_telefone, dt_nasc, rg) VALUES(
	'76483944980',
	'Jaqueline Manica',
	'jaquem@gmail.com',
	'jaque1234',
	'2342353243',
	'20010904',
	'43542342'
);

INSERT INTO professor(cpf, nome, email, senha, num_telefone, dt_nasc, rg) VALUES(
	'65837389393',
	'Marcos Valentim',
	'marcosv@gmail.com',
	'marcos1234',
	'78462376283',
	'19961204',
	'465456544'
);

INSERT INTO curso(modalidade, nome, carga_horaria) VALUES (
	'presencial',
	'Introdução a Informática',
	'120000'
);

INSERT INTO curso(modalidade, nome, carga_horaria) VALUES (
	'presencial',
	'Eletricista básico',
	'080000'
);

INSERT INTO curso(modalidade, nome, carga_horaria) VALUES (
	'online',
	'Introdução a Banco de Dados',
	'200000'
);

INSERT INTO local_curso(estado, cidade, bairro, logradouro, numero, complemento) VALUES (
	'RS',
	'Porto Alegre',
	'Centro',
	'Rua Frederico',
	234,
	''
);

INSERT INTO local_curso(estado, cidade, bairro, logradouro, numero, complemento) VALUES (
	'SC',
	'Chapecó',
	'Centro',
	'Rua Fernando Machado',
	2222,
	'Ed Eniara'
);

INSERT INTO turma(codturma, data_inicio, numvagas, fk_cpf, fk_idcurso, finalizada, fk_idlocalcurso) VALUES (
	'EL2020',
	'2023-12-12',
	50,
	'96473645680',
	2,
	0,
	1
);

INSERT INTO turma(codturma, data_inicio, numvagas, fk_cpf, fk_idcurso, finalizada, fk_idlocalcurso) VALUES (
	'IF2023',
	'2023-12-12',
	30,
	'65837389393',
	1,
	0,
	2
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'04858392432',
	'João Victor da Luz',
	'2000-03-01',
	'M'
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'05964688659',
	'Gael Daniel Miguel Freitas',
	'1971-09-17',
	'M'
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'83414760886',
	'Isabella Sophie Marli da Paz',
	'1987-01-09',
	'F'
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'76663491067',
	'Erick Nathan Gustavo Rodrigues',
	'1995-10-04',
	'M'
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'14092155980',
	'César Carlos Cavalcanti',
	'1974-09-15',
	'M'
);

INSERT INTO aluno(cpf, Nome, dt_nasc, sexo) VALUES (
	'85737200930',
	'Laís Isabela Silveira',
	'1989-03-07',
	'F'
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'SP',
	'São Paulo',
	'Centro',
	'Rua Joao cruz',
	123,
	'',
	1
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'RJ',
	'Rio de Janeiro',
	'Bela Vista',
	'Rua Viroto Cella',
	999,
	'Ed AP GGG',
	2
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'MT',
	'Mato grosso',
	'Bela Vista',
	'Rua Joao Freitas',
	432,
	'',
	3
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'SC',
	'Chapecó',
	'Centro',
	'Rua Nereu Ramos',
	3242,
	'Ed Genova',
	4
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'SC',
	'Chapecó',
	'Efapi',
	'Rua Alberto Cruz',
	33,
	'AP Casanostra',
	5
);

INSERT INTO endereco (estado, cidade, bairro, logradouro, numero, complemento, fk_matricula) VALUES (
	'SC',
	'Chapecó',
	'Bela Vista',
	'Rua Martin Ramos',
	34,
	'',
	6
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	1,
	'EL2020',
	1
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	2,
	'EL2020',
	0
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	3,
	'EL2020',
	1
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	4,
	'IF2023',
	1
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	5,
	'IF2023',
	1
);

INSERT INTO aluno_curso(fk_matricula, fk_codturma, pag_efetivado) VALUES (
	6,
	'IF2023',
	0
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	1,
	1
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	2,
	1
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	3,
	0
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	4,
	0
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	5,
	0
);

INSERT INTO certificado(fk_id_aluno_curso, apto) VALUES (
	6,
	1
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'120000',
	1
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'110000',
	2
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'020000',
	3
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'040000',
	4
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'020000',
	5
);

INSERT INTO chamada(horas_aula, fk_id_aluno_curso) VALUES (
	'080000',
	6
);