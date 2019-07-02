-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2018 at 10:33 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contentlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Page` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `Page`, `Name`) VALUES
(9, '<p>                                                    Lorem ipsum dolor sit amet, quo tale denique commune ei, pro ex alia ocurreret. Malorum \r\nnonumes scribentur sit te, id pri appareat adipiscing. Vis \r\nXXipsum audiam praesent ut, pro ea nostrum moderatius. Sale iriure labitur quo an, homero propriae definitiones usu te. Ea sed postea tibique, quo \r\nXXcu autem simul, no mei ullum ridens sadipscing.\r\nXX\r\nXX\r\nXX\r\nXX\r\nXX\r\nXX\r\nXX\r\nXX\r\nXX\r\nXXEt omnis quando meliore eos, errem tritani corpora sed ne, liber ignota nec ne. An tation animal habemus usu. Usu falli omittam percipit cu, cu \r\nXXsed ferri recteque, nonumy graeco no cum. Causae omnesque inimicus sea ad, et est munere mnesarchum.\r\nXX\r\nXXUllum fuisset referrentur ut nec, ea quo postulant corrumpit, an eum splendide inciderint theophrastus. In nulla ubique dissentiet sed, mel ei \r\nXXsint vidisse, his te meis integre. Habeo eligendi placerat ut pri. Vis ea timeam deleniti deterruisset, eam te graeco discere pertinax. Porro \r\nXXgraece discere per ei, usu et nihil iisque, paulo mandamus eos ex. Munere sensibus concludaturque id vel.\r\nXX\r\nXXIpsum philosophia et mei. Nam soluta repudiare et, his voluptua assentior voluptatum ut, evertitur similique his te. At impedit lobortis \r\nXXconcludaturque nec. Quot deterruisset vim at. Fierent consulatu scribentur his an.\r\nXX\r\nXXNe vim quem meis erant, ei meis iuvaret usu. Verterem omittantur qui an, nam id corpora efficiantur. Sed ne enim bonorum apeirian. Vis in meis \r\nXXomittam albucius.\r\nXX\r\nXXVel ad alii oratio evertitur, quo at esse illum dicit, at qui posse mucius. Ut mucius invenire ocurreret his, in ceteros detraxit vim. Modo esse \r\nXXutinam et has. Ex erant dissentiet per. Ut equidem electram laboramus usu, mutat inimicus ei vim. Per utamur ancillae verterem eu.\r\nXX\r\nXXUsu ei aperiam officiis abhorreant. Mea no nostrum scriptorem, veri senserit voluptatum cum id. Ius rebum essent torquatos ut, soleat partiendo \r\nXXsea et. Id meis graece accusam quo, vel et cibo debitis deseruisse, in usu sumo ridens feugait.\r\nXX\r\nXXMel in fugit phaedrum. Vidisse fabulas est et. Qui dictas utamur persecuti eu, dicat partem pri ad. Eos no saepe regione sanctus. Eam sint \r\nmollis \r\nXXapeirian ex, has ei appareat postulant.\r\nXX\r\nXXQui case cotidieque deterruisset et, melius facilisis eam ad. Cu pro melius incorrupte, no pro verear integre officiis. Corpora mnesarchum pro \r\net, \r\nXXexerci theophrastus pri an. Nobis altera cu qui, ea doctus audire omnesque ius. Dolorum copiosae invenire ei mei, no nam alii stet explicari. \r\nStet \r\nXXevertitur ea eos, per in dolores rationibus, an graeci impetus vivendum his.\r\nXX\r\nXXOratio oporteat est cu, cum esse corpora te. Et purto eruditi sit, ex mei aeque aliquid sententiae. In vel virtute nostrud laboramus, at nisl \r\nXXlabore aliquam vel. Alia libris graeci te eam, nibh atqui facete ut ius, quo fugit timeam periculis ut. Mel omnium integre liberavisse cu, \r\ngraeco \r\nXXscripta senserit eu sea. Atomorum molestiae mei eu, in qui veniam persecuti.</p>', 'LoreIpsum'),
(10, '<p>Brand new</p>', 'This is the newest page'),
(7, '<p>ajnpijgfdngijsnd;apjng\r\nafjgnisdpngdainpiajafdg\r\nafkjdngoadngoadfng\r\n    </p>', 'PAge');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
