CREATE TABLE users ( id INT auto_increment PRIMARY key , f_name CHAR(40) NULL , l_name CHAR(40) NULL , username CHAR(100) NULL , email CHAR(255)  NULL , password VARCHAR(255)  NULL ) ;

INSERT INTO users( f_name, l_name, username, email, password) VALUES ('vishakha','gandhi','vishakha20','vishakha20@gandhi.com','vishakha');
INSERT INTO users( f_name, l_name, username, email, password) VALUES ('abcd','efgh','abcdefgh','abcd@efgh.com','abcd');