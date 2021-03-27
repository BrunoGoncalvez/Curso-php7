use db_php_hcode;

create table tb_usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    des_login VARCHAR(64) NOT NULL,
    des_senha VARCHAR(256) NOT NULL,
    dt_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(des_login, des_senha) VALUES ('User','123456');
INSERT INTO tb_usuarios(des_login, des_senha) VALUES ('root','123456');
INSERT INTO tb_usuarios(des_login, des_senha) VALUES ('Admin','123456');
INSERT INTO tb_usuarios(des_login, des_senha) VALUES ('Administrador','senha');
INSERT INTO tb_usuarios(des_login, des_senha) VALUES ('Advogado','password');

SELECT * FROM tb_usuarios;


UPDATE tb_usuarios SET des_senha = '01233456' WHERE id_usuario = 1;
DELETE FROM tb_usuarios WHERE id_usuario = 1;
TRUNCATE TABLE tb_usuarios; /*  Zera a Tabela(Juntos com os id's)   */



