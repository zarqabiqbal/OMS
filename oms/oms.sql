-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2017 at 03:04 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oms`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `disease_id` int(20) NOT NULL AUTO_INCREMENT,
  `disease_name` varchar(50) NOT NULL,
  `disease_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`disease_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`, `disease_desc`) VALUES
(1, 'Asthma', 'Asthma is a common disorder in which chronic inflammation of the bronchial tubes (bronchi) makes them swell, narrowing the airways. Signs and symptoms include shortness of breath, chest tightness, cough and wheezing.'),
(2, 'Lung Cancer', 'Lung cancer kills more men and women than any other form of cancer. Eight out of 10 lung cancers are due to tobacco smoke. Lung cancers are classified as either small cell or non-small cell cancers.'),
(3, 'Cholestrol', 'Low-density lipoprotein (LDL) cholesterol is the "bad" cholesterol, conversely, high-density lipoprotein (HDL) cholesterol is the "good" cholesterol. High cholesterol treatment includes lifestyle changes (diet and exercise), and medications such as statins, bile acid resins, and fibric acid derivatives.'),
(4, 'Depression', 'Depression is an illness that involves the body, mood, and thoughts. It affects how one eats and sleeps, the way one feels about oneself, and the way one thinks about things. The main types of depression are major depression, dysthymia, and bipolar disease (also called manic-depressive disease).'),
(5, 'Abdominal Pain', 'Abdominal pain is pain in the belly and can be acute or chronic. Abdominal pain can reflect a major problem with one of the organs in the abdomen such as the appendix, gallbladder, large and small intestine, pancreas, liver, colon, duodenum, and spleen.'),
(6, 'Pink Eye', 'Pink eye, also called conjunctivitis, is redness or irritation of the conjunctivae, the membranes on the inner part of the eyelids and the membranes covering the whites of the eyes. These membranes react to a wide range of bacteria, viruses, allergy-provoking agents, irritants, and toxic agents.'),
(7, 'Stress', 'Stress occurs when forces from the outside world impinge on the individual. Stress is a normal part of life. However, over-stress, can be harmful. There is speculation, as well as some evidence, that points to the abnormal stress responses as being involved in causing various diseases or conditions.'),
(8, 'Migraine', 'Migraine is usually periodic attacks of headaches on one or both sides of the head. Migraines may be accompanied by nausea, vomiting, increased sensitivity light or sound, dizziness, blurred vision, cognitive disturbances, and other symptoms. Treatments include therapies and medication.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `num` bigint(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `email`, `num`) VALUES
(1, 'Kriti', 'kritideep123', 'enkritideep717@@gmail.com', 0),
(3, 'Zarqab', 'mdzebronic123', 'zarqabiqbal@gmail.com', 8932061199);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `disease_name` varchar(50) NOT NULL,
  `medicine_id` int(20) NOT NULL AUTO_INCREMENT,
  `medicine_name` varchar(50) NOT NULL,
  `medicine_desc` varchar(500) NOT NULL,
  `medicine_containment` varchar(500) NOT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`disease_name`, `medicine_id`, `medicine_name`, `medicine_desc`, `medicine_containment`) VALUES
('Asthma', 3, 'Cambria', 'This Medicine Is Used For asthma', 'Containment'),
('RingFinger', 5, 'Micanozol', 'This is Used for Treatment of ringfinger type of disease.', 'Methyl');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `num` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_detail`
--

