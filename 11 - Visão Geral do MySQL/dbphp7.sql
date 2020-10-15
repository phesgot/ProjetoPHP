USE dbphp7;

CREATE TABLE tb_usuario (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(56) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuario (deslogin, dessenha) VALUES ('root', '1@45&');

SELECT * FROM tb_usuario;

UPDATE tb_usuario SET dessenha = '1407@' WHERE idusuario = '1';

DELETE FROM tb_usuario WHERE idusuario = '1';

TRUNCATE TABLE tb_usuario; -- formata tabela