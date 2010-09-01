-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: xgm
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.6

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
-- Table structure for table `xgm_car`
--

DROP TABLE IF EXISTS `xgm_car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_car` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_no` varchar(10) NOT NULL,
  `car_status` tinyint(4) NOT NULL DEFAULT '1',
  `car_addtime` datetime NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_cardinfo`
--

DROP TABLE IF EXISTS `xgm_cardinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_cardinfo` (
  `ci_id` int(11) NOT NULL AUTO_INCREMENT,
  `ci_name` varchar(20) NOT NULL,
  `ci_money` varchar(10) NOT NULL,
  `cview_id` int(11) DEFAULT NULL,
  `cview_name` varchar(20) NOT NULL,
  `ci_date` datetime NOT NULL,
  `ci_type` tinyint(4) NOT NULL COMMENT '1-Îª´¢Öµ¿¨£¬3-Îª´¢Îï¿¨',
  `ci_desc` text,
  `ci_mark` text,
  PRIMARY KEY (`ci_id`),
  UNIQUE KEY `ci_name` (`ci_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_cardlib`
--

DROP TABLE IF EXISTS `xgm_cardlib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_cardlib` (
  `ci_id` int(11) DEFAULT NULL,
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_id` int(11) DEFAULT NULL,
  `cl_num` varchar(12) NOT NULL,
  `cl_date` datetime NOT NULL,
  `cl_state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-Îª¿ÉÓÃ£¬0-Îª²»¿ÉÓÃ',
  `cl_otime` datetime NOT NULL,
  `cl_expire` datetime NOT NULL,
  `ci_money` varchar(10) NOT NULL,
  `ci_balance` varchar(10) NOT NULL DEFAULT '0',
  `co_order` varchar(20) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_cardorder`
--

DROP TABLE IF EXISTS `xgm_cardorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_cardorder` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_id` int(11) DEFAULT NULL,
  `co_order` varchar(20) NOT NULL,
  `co_totalnums` int(11) NOT NULL DEFAULT '0',
  `co_total` varchar(10) NOT NULL,
  `co_ava` varchar(20) NOT NULL,
  `co_text` text NOT NULL COMMENT 'ÐòÁÐ»¯µÄ´æ·ÅÃ¿ÖÖ¿¨µÄÃû³Æ£¬Ã¿ÖÖ¿¨µÄÊýÁ¿£¬ÒÔ¼°¿¨µÄµ¥¼Û',
  `co_invoice` varchar(255) NOT NULL COMMENT 'Îª¿ÕÔò²»ÐèÒª·¢Æ±',
  `co_mark` text,
  `co_ctime` datetime NOT NULL,
  `cu_name` varchar(20) NOT NULL,
  `co_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-Î´³ö¿¨£¬3-³ö¿¨Íê³É£¬5-×÷·Ï',
  `co_stime` datetime NOT NULL COMMENT 'ÉèÖÃ¶©µ¥×´Ì¬µÄÊ±¼ä',
  `cview_name` varchar(20) NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_carduser`
--

DROP TABLE IF EXISTS `xgm_carduser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_carduser` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_name` varchar(20) NOT NULL,
  `cu_py` varchar(40) NOT NULL,
  `cu_company` varchar(50) NOT NULL,
  `cu_sex` tinyint(4) NOT NULL,
  `cu_job` varchar(20) DEFAULT NULL,
  `cu_tel1` varchar(20) DEFAULT NULL,
  `cu_tel2` varchar(20) DEFAULT NULL,
  `cu_email` varchar(50) DEFAULT NULL,
  `cu_website` varchar(100) DEFAULT NULL,
  `cu_msn` varchar(50) DEFAULT NULL,
  `cu_qq` varchar(20) DEFAULT NULL,
  `cu_taobao` varchar(50) DEFAULT NULL,
  `cu_fetion` varchar(50) DEFAULT NULL,
  `cu_bank` varchar(20) DEFAULT NULL,
  `cu_bankname` varchar(20) DEFAULT NULL,
  `cu_mark` text,
  `cu_atime` datetime NOT NULL,
  PRIMARY KEY (`cu_id`),
  UNIQUE KEY `cnameemail` (`cu_name`,`cu_email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_cardview`
--

DROP TABLE IF EXISTS `xgm_cardview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_cardview` (
  `cview_id` int(11) NOT NULL AUTO_INCREMENT,
  `cview_name` varchar(20) NOT NULL,
  `cview_desc` text,
  `cview_date` datetime NOT NULL,
  PRIMARY KEY (`cview_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_getaddress`
--

DROP TABLE IF EXISTS `xgm_getaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_getaddress` (
  `ga_id` int(11) NOT NULL AUTO_INCREMENT,
  `ou_id` int(11) DEFAULT NULL,
  `ga_getter` varchar(20) NOT NULL,
  `ga_address` varchar(60) NOT NULL,
  `ga_phone` varchar(12) NOT NULL,
  `ga_tel` varchar(20) NOT NULL,
  PRIMARY KEY (`ga_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goinfo`
--

DROP TABLE IF EXISTS `xgm_goinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goinfo` (
  `go_order` varchar(20) NOT NULL,
  `gl_id` int(11) DEFAULT NULL,
  `goi_nums` int(11) NOT NULL DEFAULT '0',
  `gl_name` varchar(30) NOT NULL,
  `goi_outinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goodcat`
--

DROP TABLE IF EXISTS `xgm_goodcat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goodcat` (
  `gc_id` int(11) NOT NULL AUTO_INCREMENT,
  `gc_name` varchar(20) NOT NULL,
  `gc_time` datetime NOT NULL,
  `gc_pid` int(11) NOT NULL DEFAULT '0',
  `gc_mark` text NOT NULL,
  PRIMARY KEY (`gc_id`),
  UNIQUE KEY `cname` (`gc_name`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goodexception`
--

DROP TABLE IF EXISTS `xgm_goodexception`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goodexception` (
  `ge_id` int(11) NOT NULL AUTO_INCREMENT,
  `go_id` int(11) DEFAULT NULL,
  `go_order` varchar(20) NOT NULL,
  `ge_status` tinyint(4) NOT NULL DEFAULT '0',
  `ge_type` tinyint(4) NOT NULL DEFAULT '0',
  `ge_date` datetime NOT NULL,
  `ge_cdate` datetime NOT NULL,
  `ge_content` text NOT NULL,
  PRIMARY KEY (`ge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goodin`
--

DROP TABLE IF EXISTS `xgm_goodin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goodin` (
  `gi_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_id` int(11) DEFAULT NULL,
  `gl_edate` date NOT NULL,
  `gl_inprice` varchar(10) NOT NULL,
  `gl_adprice` varchar(10) NOT NULL,
  `gl_nums` int(11) NOT NULL DEFAULT '0',
  `gl_order` varchar(20) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `gl_date` datetime NOT NULL,
  `gl_state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-¿ÉÓÃ£¬0-²»¿ÉÓÃ ',
  `gl_leaves` int(11) NOT NULL DEFAULT '0' COMMENT '³ö¿âºóÊ£ÓàÊýÁ¿',
  `gl_name` varchar(30) NOT NULL,
  `gl_prodate` date NOT NULL,
  PRIMARY KEY (`gi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goodlib`
--

DROP TABLE IF EXISTS `xgm_goodlib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goodlib` (
  `gl_id` int(11) NOT NULL AUTO_INCREMENT,
  `gl_name` varchar(30) NOT NULL,
  `gl_shortname` varchar(10) DEFAULT NULL,
  `gc_id` int(11) DEFAULT NULL,
  `gl_brand` varchar(20) NOT NULL,
  `gl_from` varchar(20) NOT NULL,
  `gl_pack` varchar(250) NOT NULL,
  `gl_per` varchar(10) NOT NULL,
  `gl_mprice` varchar(10) NOT NULL DEFAULT '0',
  `gl_warn` varchar(10) NOT NULL DEFAULT '0',
  `gl_warnper` tinyint(4) NOT NULL COMMENT '1-ÊýÁ¿£¬2-ÖØÁ¿',
  `gl_mark` text,
  `gl_type` tinyint(4) NOT NULL,
  `gl_w` varchar(10) NOT NULL,
  `gl_net` varchar(10) NOT NULL,
  `gl_leaves` int(11) NOT NULL DEFAULT '0',
  `gl_isspec` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1-ÎªÌØ¼Û£¬0-·ÇÌØ¼Û',
  PRIMARY KEY (`gl_id`),
  UNIQUE KEY `gname` (`gl_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_goodorder`
--

DROP TABLE IF EXISTS `xgm_goodorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_goodorder` (
  `go_id` int(11) NOT NULL AUTO_INCREMENT,
  `ou_id` int(11) NOT NULL,
  `go_order` varchar(20) NOT NULL,
  `go_date` datetime NOT NULL,
  `ou_phone` varchar(18) NOT NULL,
  `go_status` tinyint(4) NOT NULL COMMENT '1-æœªé…é€ï¼Œ2-é…é€å®Œæˆï¼Œ3-ä½œåºŸï¼Œ4-é€€è´§ï¼Œ5-æ¢è´§',
  `cl_id` int(11) NOT NULL,
  `go_sdate` date NOT NULL,
  `go_mtype` tinyint(4) NOT NULL COMMENT '1-å¸æœºä»£æ”¶ï¼Œ2-æ”¯ä»˜å®ï¼Œ3-å…¶ä»–',
  `go_mark` text NOT NULL,
  `s_sender` varchar(20) NOT NULL,
  `s_id` int(11) NOT NULL,
  `car_no` varchar(10) NOT NULL,
  `car_id` int(11) NOT NULL,
  `go_sendmoney` varchar(10) NOT NULL,
  `go_type` tinyint(4) NOT NULL COMMENT '1-å‚¨ç‰©å¡è®¢å•ï¼Œ2-å‚¨å€¼å¡è®¢å•ï¼Œ3-é›¶æ•£é…é€å•ï¼Œ4-è¡¥é€é…é€å•ï¼Œ5-æŠ•è¯‰è¡¥é€',
  `ou_truename` varchar(20) NOT NULL,
  `ou_oneaddress` text NOT NULL COMMENT 'åºåˆ—åŒ–çš„æ”¶è´§äººä¿¡æ¯',
  `go_allprice` varchar(8) NOT NULL,
  `go_oprice` varchar(8) NOT NULL,
  `go_rate` smallint(6) NOT NULL DEFAULT '0' COMMENT 'å­˜æ”¾å½“å‰è¯¥è®¢å•çš„æŠ˜æ‰£',
  `go_smark` text NOT NULL,
  `go_fmark` text NOT NULL,
  `go_omark` text NOT NULL,
  `go_outinfomark` text NOT NULL,
  PRIMARY KEY (`go_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_inorder`
--

DROP TABLE IF EXISTS `xgm_inorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_inorder` (
  `io_id` int(11) NOT NULL AUTO_INCREMENT,
  `io_no` varchar(50) NOT NULL,
  `io_adate` datetime NOT NULL,
  `io_date` date NOT NULL,
  `io_total` float NOT NULL,
  `io_mark` text NOT NULL,
  PRIMARY KEY (`io_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_orderuser`
--

DROP TABLE IF EXISTS `xgm_orderuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_orderuser` (
  `ou_id` int(11) NOT NULL AUTO_INCREMENT,
  `ou_username` varchar(20) NOT NULL,
  `ou_truename` varchar(20) NOT NULL,
  `ou_pinyin` varchar(20) NOT NULL,
  `ou_phone` varchar(18) NOT NULL,
  `ou_tel` varchar(20) NOT NULL,
  `ou_total` varchar(10) NOT NULL DEFAULT '0',
  `ou_address` text COMMENT 'ÐòÁÐ»¯´æ·ÅµÄÊÕ»õÇåµ¥',
  `ou_date` datetime NOT NULL,
  `ou_email` varchar(120) NOT NULL,
  PRIMARY KEY (`ou_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_sender`
--

DROP TABLE IF EXISTS `xgm_sender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_sender` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_sender` varchar(20) NOT NULL,
  `s_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-¿ÉÓÃ£¬2-Îª²»¿ÉÓÃ',
  `s_addtime` datetime NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `xgm_supplier`
--

DROP TABLE IF EXISTS `xgm_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xgm_supplier` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_name` varchar(50) NOT NULL,
  `sp_conner1` varchar(20) NOT NULL,
  `sp_conner2` varchar(20) NOT NULL,
  `sp_c1tel1` varchar(20) NOT NULL,
  `sp_c1tel2` varchar(20) NOT NULL,
  `sp_c2tel1` varchar(20) NOT NULL,
  `sp_c2tel2` varchar(20) NOT NULL,
  `sp_manager` varchar(20) NOT NULL,
  `sp_manmobile` varchar(20) NOT NULL,
  `sp_manmsn` varchar(25) NOT NULL,
  `sp_manqq` varchar(15) NOT NULL,
  `sp_mantaobao` varchar(20) NOT NULL,
  `sp_manfetion` varchar(20) NOT NULL,
  `sp_office` varchar(80) NOT NULL,
  `sp_svn` varchar(80) NOT NULL,
  `sp_website` varchar(120) NOT NULL,
  `sp_email` varchar(60) NOT NULL,
  `sp_bankno` varchar(25) NOT NULL,
  `sp_bankname` varchar(20) NOT NULL,
  `sp_product` text,
  `sp_mark` text,
  `sp_time` datetime NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-09-02  1:29:05
