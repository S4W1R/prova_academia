CREATE DATABASE fitclub_db3;
USE fitclub_db3;

CREATE TABLE login(
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100)not null unique,
senha VARCHAR(100) not null
);

INSERT INTO login (email, senha) VALUES ('teste@123', 'teste3'),
                                        ('teste@1234', 'teste4');
