# Lamp V 1.0
#### Mudar background de uma página remotamente com PHP e jQuery
> **Banco de Dados**
##### Esta é uma aplicação em PHP, organizada em arquitetura MVC. Primeiro você precisa criar um banco de dados, por padrão com nome __db_lamp__ .
```
CREATE DATABASE `db_lamp`;
```
##### Logo após você terá que criar uma tabela com seguinte comando:
```
CREATE TABLE `tb_status` (
	`id_lamp` INT AUTO_INCREMENT PRIMARY KEY,
	`status` VARCHAR(5) NOT NULL
);
```
##### Por último alimentar a tabela de acordo com comando abaixo:
```
INSERT INTO `tb_status` (`id_lamp` ,`status`) VALUES ('1', '0');
```
> **Preciso alterar o código para executar normalmente?**
#### De acordo com seu banco de dados necessário sim alterar o arquivo de conexão com banco de dados, localizado no diretório controller.
> **Como verifico o resultado da Aplicação?**
Bom exemplo simples, página do controle da aplicação será [http://localhost/lamp](http://localhost/lamp), caso esteja em um servidor local e pra exibir o resultado do comando basta adicionar na URL um get com parâmetro result, no caso [http://localhost/lamp/?result](http://localhost/lamp/?result).
