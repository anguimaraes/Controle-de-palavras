-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: db_cadpalavras
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `palavra` varchar(200) DEFAULT NULL,
  `significado` varchar(800) DEFAULT NULL,
  `comentario` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (1,'Entidades Paraestatais','São pessoas jurídicas privadas que não integram a estrutura da administração direta ou indireta, mas colaboram com o Estado no desempenho de atividades de interesse público, mas não exclusivas de Estado, de natureza não lucrativa. Integram o chamado Terceiro Setor. Segundo Alexandre Mazza, tem predominado em concursos públicos o entendimento de que o conceito de entidades paraestatais inclui somente os serviços sociais (pessoas jurídicas de direito privado, criadas mediante autorização legislativa e que compõem o denominado sistema “S”).','Comentário teste Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae scelerisque lectus. Suspendisse mi massa, imperdiet nec dui ac, auctor lacinia neque. Donec ac consectetur ipsum, vitae faucibus quam. Nulla efficitur risus eu quam sagittis, dignissim dignissim tellus tempor. Donec ac sem vel orci fermentum congue.'),(2,'Ato administrativo','É a manifestação unilateral de vontade da Administração Pública ou de particulares no exercício de prerrogativas públicas, em transferir, modificar, extinguir e declarar direitos, ou impor obrigações aos administrados ou a si própria, que produz efeitos jurídicos imediatos, com observância da lei, sob regime jurídico de direito público e sujeita a controle pelo Poder Judiciário. Nota-se que, embora sejam os atos típicos do Poder Executivo no exercício de suas funções próprias, os Poderes Judiciário e Legislativo também editam atos administrativos, principalmente relacionados ao exercício de suas atividades de gestão interna.','Phasellus metus urna, congue at orci eu, convallis lacinia lectus. Nullam a congue velit. Integer elementum nunc nec est euismod, at lobortis sem malesuada. Cras ultricies tempor felis, nec ultrices leo luctus at. Nam eget aliquet nulla. Vestibulum tincidunt nunc quis massa condimentum tempus tempor eget eros.'),(3,'Vacância de cargo público','É o cargo vago ou desocupado. O artigo 33 da Lei nº 8.112/90 faz referência às hipóteses em que ocorre a vacância de cargo público: exoneração; demissão; promoção; readaptação; aposentadoria; posse em outro cargo inacumulável; falecimento.','Duis nisi elit, lobortis at vestibulum vitae, tempor id diam. Morbi eget gravida nisl. Phasellus nisl justo, malesuada dapibus sodales vel, semper vitae ipsum.'),(4,'Res nullius','São as coisas sem dono ou bens adéspotas, sobre as quais não há qualquer disciplina específica do ordenamento jurídico, incluindo os bens inapropriáveis, como a luz, e os bens condicionadamente inapropriáveis, como os animais selvagens.','Etiam a porttitor nulla, non ultrices justo. Ut lacus eros, condimentum eu sem non, faucibus tristique nisi. Nam finibus bibendum sodales. Praesent imperdiet nisi fringilla erat maximus, eget imperdiet lorem luctus.'),(5,'Desafetação','É o processo de transformação do bem de uso comum ou de uso especial em bem público dominical, promovido mediante lei específica. Nota-se que não existe no direito brasileiro a denominada desafetação tácita, entendida como a mudança de categoria do bem pela falta de uso.','Integer sit amet metus eu velit feugiat ultrices. Phasellus at pharetra tortor, et sodales neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin elementum, enim eu egestas vestibulum, ligula urna molestie libero, non porta orci libero ac neque.'),(6,'Erário','São os recursos financeiros provenientes dos cofres públicos da Administração Pública direta e indireta, e aqueles destinados pelo Estado às entidades mencionadas no artigo 1º da Lei nº 8.429/92.','Praesent imperdiet ornare libero, sodales rhoncus ex placerat vitae. Proin justo dolor, pretium eget porta vel, lobortis ac dolor. Suspendisse ut porta est, vel ullamcorper nunc.'),(7,'Improbidade administrativa','Constitui ato ilegal praticado por agente público, durante o exercício de função pública ou decorrente desta, que infringe a moralidade pública, afrontando a honestidade, boa-fé, o respeito à igualdade, às normas de condutas aceitas pelos administrados, o dever de lealdade e outros princípios éticos e morais; ou por terceiro que induz, concorre ou se beneficia do ato de improbidade. A Lei nº 8.429/92 estabelece três espécies de atos de improbidade: os que importam enriquecimento ilícito (artigo 9º), os que causam lesão ao erário (artigo 10) e, por fim, os que atentam contra os princípios da Administração Pública (artigo 11).','Morbi fringilla, velit non placerat iaculis, purus diam condimentum sem, eget euismod dui nisi vel ligula. Quisque vel sodales est, sed imperdiet justo. Nunc at lorem tempus, consectetur augue sed, vehicula justo.'),(8,'Desestatização','Trata-se de uma forma de a sociedade ter maior autonomia para decidir seu próprio destino, com menos presença do Estado. Segundo a Lei nº 9.491/97, considera-se desestatização \"a alienação, pela União, de direitos que lhe assegurem, diretamente ou através de outras controladas, preponderância nas deliberações sociais e o poder de eleger a maioria dos administradores da sociedade; a transferência, para a iniciativa privada, da execução de serviços públicos explorados pela União, diretamente ou através de entidades controladas, bem como daqueles de sua responsabilidade; e, a transferência ou outorga de direitos sobre bens móveis e imóveis da União, nos termos da Lei\" (artigo 2º, § 1º).','Sed vulputate lacus pharetra laoreet tincidunt. Nulla sed diam venenatis, dignissim arcu ac, iaculis lorem. Suspendisse nec nunc at ipsum laoreet facilisis non nec leo. Morbi interdum ex quis risus sodales, sed interdum ligula lobortis. Nam imperdiet tortor non dolor iaculis vulputate. Suspendisse cursus feugiat lorem, id aliquam velit porta quis. Nam id consectetur nibh, eget tincidunt nibh. Nulla vitae rutrum ante.'),(9,'BacenJud','Trata-se de sistema que interliga a Justiça ao Banco Central e às instituição bancárias, agilizando a solicitação de informações e o envio de ordens judiciais ao Sistema Financeiro Nacional, via internet. Mediante um convênio entre o Banco Central do Brasil e o Poder Judiciário, foi criado o BacenJud 2.0, que é um sistema operado pelo Banco Central do Brasil. Por meio do BacenJud os juízes, com senha previamente cadastrada, preenchem um formulário na  internet solicitando as informações necessárias ao processo  com o objetivo de penhora on-line ou outros procedimentos judiciais.  Com isso, a ordem judicial é repassada eletronicamente para os bancos. ','Mauris non elementum velit. Duis odio neque, tincidunt tincidunt dignissim non, fringilla vel dui. Aliquam cursus semper laoreet. Praesent eros odio, rutrum non justo eu, placerat volutpat odio. Ut leo dui, dapibus quis bibendum in, cursus quis nulla. Proin dapibus nisi in dui ullamcorper bibendum.');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20 14:55:24
