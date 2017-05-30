create database veggies;
use veggies;

/*create a user in database*/
grant select, insert, update, delete on veggies.*
             to 'ejones'@'localhost'
             identified by 'Test1234';
flush privileges;

CREATE TABLE IF NOT EXISTS `vegetable` (
  `name` varchar(255) NOT NULL PRIMARY KEY,
  `price` DECIMAL (12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COMMENT='This hold the code types that are available for the applicat';

--
-- Dumping data for table `codevalue`
--

INSERT INTO `vegetable` (`name`, `price`) VALUES
('Cauliflower', 2.75);

INSERT INTO `vegetable` (`name`, `price`) VALUES
('Broccoli', 2.00);