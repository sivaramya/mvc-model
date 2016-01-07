
--
-- Database: `contacts`
--

DROP DATABASE IF EXISTS `contacts`;
CREATE DATABASE `contacts`;
USE `contacts`;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `phone`, `email`, `address`) VALUES
('Amir', '0771111111', 'amir@gmail.com', 'Jaffna'),
('Zarma', '0773333333', 'za@gmail.com', 'Colombo'),
('Vinoth', '0778888888', 'vino@gmail.com', 'Kandy');

