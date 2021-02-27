CREATE DATABASE projetorgb;

USE projetorgb;

CREATE TABLE tab_imagens(
	codigo int(4) AUTO_INCREMENT,
	imagem longblob NOT NULL,
	texto varchar(50) NOT NULL,
	PRIMARY KEY (codigo)
);

CREATE TABLE tab_links_sociais(
	id_social int(4) AUTO_INCREMENT,
	nomeRede varchar(50) NOT NULL,
	PRIMARY KEY (id_social)
);


/*Query para a adição de informações na tabela tab_images */
INSERT INTO `tab_imagens`(`imagem`, `texto`) VALUES ('localhost/public_html/images/photos/[nome imagem].png','imagem 1');

/*Query para a adição de informações na tabela tab_sociais*/
INSERT INTO `tab_links_sociais`(`imagem`, `texto`) VALUES ('localhost/public_html/images/logo/[nome imagem].png','imagem 1');

