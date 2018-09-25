SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create table tb_found (
id int(11) not null auto_increment primary key,
cidade varchar(60) not null,
ano_letivo int(8) not null,
turno enum('vespertino','matutino','noturno') not null,
escola varchar(60) not null,
endereco varchar(60) not null,
telefone varchar(10) not null,
vagas int(11) not null);

create index idx_found on tb_found(id);

create table tb_pessoa (
id int(11) not null auto_increment primary key,
nome_resp text not null,
cpf_resp varchar(20) not null,
dn_resp varchar(11) not null,
tel_resp int(12) not null,
email_resp varchar(20) not null,
nome_aluno text not null,
cpf_aluno int(11) not null,
dn_aluno varchar(12) not null,
grau text not null,
protocolo varbinary(60) not null);

create index idx_pessoa on tb_pessoa(id);

create table tb_escolas (
id_escola int(11)  not null auto_increment primary key,
nome_escola text not null,
tel_escola int(12) not null,
end_escola varchar(60) not null,
turno_escola int(3) not null,
vagas varchar(50) not null);

create index idx_escola on tb_escolas(id_escola);

ALTER TABLE `tb_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  

ALTER TABLE `tb_pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

ALTER TABLE `tb_escolas`
  MODIFY `id_escola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
