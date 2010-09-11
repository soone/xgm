/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2010-9-11 9:29:21                            */
/*==============================================================*/


drop procedure if exists createOrder;

drop procedure if exists goBackPro;

drop procedure if exists outOrder;

drop procedure if exists wrongOrder;

drop table if exists xgm_car;

drop table if exists xgm_cardinfo;

drop table if exists xgm_cardlib;

drop table if exists xgm_cardorder;

drop index cnameemail on xgm_carduser;

drop table if exists xgm_carduser;

drop table if exists xgm_cardview;

drop table if exists xgm_getaddress;

drop table if exists xgm_goinfo;

drop index cname on xgm_goodcat;

drop table if exists xgm_goodcat;

drop table if exists xgm_goodexception;

drop table if exists xgm_goodin;

drop index gname on xgm_goodlib;

drop table if exists xgm_goodlib;

drop table if exists xgm_goodorder;

drop table if exists xgm_inorder;

drop table if exists xgm_orderuser;

drop table if exists xgm_sender;

drop table if exists xgm_supplier;

/*==============================================================*/
/* Table: xgm_car                                               */
/*==============================================================*/
create table xgm_car
(
   car_id               int not null,
   car_no               varchar(10) not null,
   car_status           tinyint not null default 1 comment '1-可用，2-不可用',
   car_addtime          datetime not null,
   primary key (car_id)
);

/*==============================================================*/
/* Table: xgm_cardinfo                                          */
/*==============================================================*/
create table xgm_cardinfo
(
   ci_id                int not null auto_increment,
   ci_name              varchar(20) not null,
   ci_money             varchar(10) not null,
   cview_id             int,
   cview_name           varchar(20) not null,
   ci_date              datetime not null,
   ci_type              tinyint not null comment '2-为储值卡，1-为储物卡',
   ci_desc              text,
   ci_mark              text,
   primary key (ci_id)
)
type = MYISAM;

/*==============================================================*/
/* Table: xgm_cardlib                                           */
/*==============================================================*/
create table xgm_cardlib
(
   ci_id                int,
   cl_id                int not null auto_increment,
   co_id                int,
   cl_num               varchar(12) not null,
   cl_date              datetime not null,
   cl_state             tinyint not null default 1 comment '1-为可用，0-为不可用',
   cl_otime             datetime not null,
   cl_expire            datetime not null,
   ci_money             varchar(10) not null,
   ci_balance           varchar(10) not null default '0',
   co_order             varchar(20) not null,
   primary key (cl_id)
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_cardorder                                         */
/*==============================================================*/
create table xgm_cardorder
(
   co_id                int not null auto_increment,
   cu_id                int,
   co_order             varchar(20) not null,
   co_totalnums         int not null default 0,
   co_total             varchar(10) not null,
   co_ava               varchar(20) not null,
   co_text              text not null comment '序列化的存放每种卡的名称，每种卡的数量，以及卡的单价',
   co_invoice           varchar(255) not null comment '为空则不需要发票',
   co_mark              text,
   co_ctime             datetime not null,
   cu_name              varchar(20) not null,
   co_status            tinyint not null default 1 comment '1-未出卡，3-出卡完成，5-作废',
   co_stime             datetime not null comment '设置订单状态的时间',
   cview_name           varchar(20) not null,
   primary key (co_id)
)
type = MYISAM;

/*==============================================================*/
/* Table: xgm_carduser                                          */
/*==============================================================*/
create table xgm_carduser
(
   cu_id                int not null auto_increment,
   cu_name              varchar(20) not null,
   cu_py                varchar(40) not null,
   cu_company           varchar(50) not null,
   cu_sex               tinyint not null,
   cu_job               varchar(20),
   cu_tel1              varchar(20),
   cu_tel2              varchar(20),
   cu_email             varchar(50),
   cu_website           varchar(100),
   cu_msn               varchar(50),
   cu_qq                varchar(20),
   cu_taobao            varchar(50),
   cu_fetion            varchar(50),
   cu_bank              varchar(20),
   cu_bankname          varchar(20),
   cu_mark              text,
   cu_atime             datetime not null,
   primary key (cu_id)
)
type = MYISAM;

/*==============================================================*/
/* Index: cnameemail                                            */
/*==============================================================*/
create unique index cnameemail on xgm_carduser
(
   cu_name,
   cu_email
);

/*==============================================================*/
/* Table: xgm_cardview                                          */
/*==============================================================*/
create table xgm_cardview
(
   cview_id             int not null auto_increment,
   cview_name           varchar(20) not null,
   cview_desc           text,
   cview_date           datetime not null,
   primary key (cview_id)
)
type = MYISAM;

/*==============================================================*/
/* Table: xgm_getaddress                                        */
/*==============================================================*/
create table xgm_getaddress
(
   ga_id                int not null auto_increment,
   ou_id                int,
   ga_getter            varchar(20) not null,
   ga_address           varchar(60) not null,
   ga_phone             varchar(12) not null,
   ga_tel               varchar(20) not null,
   primary key (ga_id)
);

/*==============================================================*/
/* Table: xgm_goinfo                                            */
/*==============================================================*/
create table xgm_goinfo
(
   go_order             varchar(20) not null,
   gl_id                int,
   goi_nums             int not null default 0,
   gl_name              varchar(30) not null,
   goi_outinfo          text not null comment '存放物品出库的详情'
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_goodcat                                           */
/*==============================================================*/
create table xgm_goodcat
(
   gc_id                int not null auto_increment,
   gc_name              varchar(20) not null,
   gc_time              datetime not null,
   gc_pid               int not null default 0,
   gc_mark              text not null,
   primary key (gc_id)
)
type = MYISAM;

/*==============================================================*/
/* Index: cname                                                 */
/*==============================================================*/
create unique index cname on xgm_goodcat
(
   gc_name
);

/*==============================================================*/
/* Table: xgm_goodexception                                     */
/*==============================================================*/
create table xgm_goodexception
(
   ge_id                int not null auto_increment,
   go_id                int,
   go_order             varchar(20) not null,
   ge_status            tinyint not null default 0 comment '1-处理完成 0-未处理',
   ge_type              tinyint not null default 0 comment '1-部分退回，2-全部退回',
   ge_date              datetime not null,
   ge_cdate             datetime not null,
   ge_content           text not null comment '回收入库的物品id，名称以及生产日期数量以逗号隔开id将用|隔开存储',
   primary key (ge_id)
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_goodin                                            */
/*==============================================================*/
create table xgm_goodin
(
   gi_id                int not null auto_increment,
   sp_id                int,
   gl_edate             date not null,
   gl_inprice           varchar(10) not null,
   gl_adprice           varchar(10) not null,
   gl_nums              int not null default 0,
   gl_order             varchar(20) not null,
   sp_name              varchar(50) not null,
   gl_date              datetime not null,
   gl_state             tinyint not null default 1 comment '1-可用，0-不可用 ',
   gl_leaves            int not null default 0 comment '出库后剩余数量',
   gl_name              varchar(30) not null,
   gl_prodate           date not null comment '产品的生产日期',
   primary key (gi_id)
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_goodlib                                           */
/*==============================================================*/
create table xgm_goodlib
(
   gl_id                int not null auto_increment,
   gl_name              varchar(30) not null,
   gl_shortname         varchar(10),
   gc_id                int,
   gl_brand             varchar(20) not null,
   gl_from              varchar(20) not null,
   gl_pack              varchar(250) not null,
   gl_per               varchar(10) not null,
   gl_mprice            varchar(10) not null default '0',
   gl_warn              varchar(10) not null default '0',
   gl_warnper           tinyint not null comment '1-数量，2-重量',
   gl_mark              text,
   gl_type              tinyint not null,
   gl_w                 varchar(10) not null,
   gl_net               varchar(10) not null,
   gl_leaves            int not null default 0,
   gl_isspec            tinyint not null default 0 comment '1-为特价，0-非特价',
   primary key (gl_id)
)
type = InnoDB;

/*==============================================================*/
/* Index: gname                                                 */
/*==============================================================*/
create unique index gname on xgm_goodlib
(
   gl_name
);

/*==============================================================*/
/* Table: xgm_goodorder                                         */
/*==============================================================*/
create table xgm_goodorder
(
   go_id                int not null auto_increment,
   ou_id                int not null,
   go_order             varchar(20) not null,
   go_date              datetime not null,
   ou_phone             varchar(20) not null,
   go_status            tinyint not null comment '1-未配送，2-配送完成，3-作废，6-正在配送',
   cl_id                int not null,
   go_sdate             date not null,
   go_mtype             tinyint not null comment '1-司机代收，2-支付宝，3-其他',
   go_mark              text not null,
   s_sender             varchar(20) not null,
   s_id                 int not null,
   car_no               varchar(10) not null,
   car_id               int not null,
   go_sendmoney         varchar(10) not null,
   go_type              tinyint not null comment '1-储物卡订单，2-储值卡订单，3-零散配送单，4-补送配送单，5-投诉补送，6--异常配送单，7-返厂配送单',
   ou_truename          varchar(20) not null,
   ou_oneaddress        text not null comment '序列化的收货人信息',
   go_allprice          varchar(8) not null,
   go_oprice            varchar(8) not null,
   go_rate              smallint not null default 0 comment '存放当前该订单的折扣',
   go_smark             text not null,
   go_fmark             text not null,
   go_omark             text not null,
   go_outinfomark       text not null comment '记录配送的时候物品的进货单号、id、生产日期、数量',
   primary key (go_id)
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_inorder                                           */
/*==============================================================*/
create table xgm_inorder
(
   io_id                int not null auto_increment,
   io_no                varchar(50) not null,
   io_adate             datetime not null,
   io_date              date not null,
   io_total             float not null,
   io_mark              text not null,
   io_paytime           date not null,
   primary key (io_id)
);

/*==============================================================*/
/* Table: xgm_orderuser                                         */
/*==============================================================*/
create table xgm_orderuser
(
   ou_id                int not null auto_increment,
   ou_username          varchar(20) not null,
   ou_truename          varchar(20) not null,
   ou_pinyin            varchar(20) not null,
   ou_phone             varchar(18) not null,
   ou_tel               varchar(20) not null,
   ou_total             varchar(10) not null default '0',
   ou_address           text comment '序列化存放的收货清单',
   ou_date              datetime not null,
   ou_email             varchar(120) not null,
   primary key (ou_id)
)
type = InnoDB;

/*==============================================================*/
/* Table: xgm_sender                                            */
/*==============================================================*/
create table xgm_sender
(
   s_id                 int not null auto_increment,
   s_sender             varchar(20) not null,
   s_status             tinyint not null default 1 comment '1-可用，2-为不可用',
   s_addtime            datetime not null,
   primary key (s_id)
);

/*==============================================================*/
/* Table: xgm_supplier                                          */
/*==============================================================*/
create table xgm_supplier
(
   sp_id                int not null auto_increment,
   sp_name              varchar(50) not null,
   sp_conner1           varchar(20) not null,
   sp_conner2           varchar(20) not null,
   sp_c1tel1            varchar(20) not null,
   sp_c1tel2            varchar(20) not null,
   sp_c2tel1            varchar(20) not null,
   sp_c2tel2            varchar(20) not null,
   sp_manager           varchar(20) not null,
   sp_manmobile         varchar(20) not null,
   sp_manmsn            varchar(25) not null,
   sp_manqq             varchar(15) not null,
   sp_mantaobao         varchar(20) not null,
   sp_manfetion         varchar(20) not null,
   sp_office            varchar(80) not null,
   sp_svn               varchar(80) not null,
   sp_website           varchar(120) not null,
   sp_email             varchar(60) not null,
   sp_bankno            varchar(25) not null,
   sp_bankname          varchar(20) not null,
   sp_product           text,
   sp_mark              text,
   sp_time              datetime not null,
   primary key (sp_id)
)
type = MYISAM;

create procedure createOrder (IN uid int, IN goods varchar(800), IN orderNo varchar(25), IN orderType tinyint, IN rate smallint, IN cid int, IN smark text, IN fmark text, IN gmark text, IN gt int, IN omark text, IN phone varchar(20), IN tname varchar(50), IN oneAdd text, IN oprice varchar(10), IN sdate datetime, OUT goMoney int)
soone_pro:BEGIN
DECLARE allPrice int DEFAULT 0;
DECLARE theFlag int DEFAULT 0;
DECLARE oRate int DEFAULT 0;
DECLARE leaInfo varchar(255);
DECLARE gInfo varchar(20);
DECLARE gid int;
DECLARE gNum int DEFAULT 0;
DECLARE gp int DEFAULT 0;
DECLARE gl int DEFAULT 0;
DECLARE gi tinyint;
DECLARE gn varchar(30);
DECLARE cls tinyint;
DECLARE cle datetime;
DECLARE cia int;

SET goMoney = 1;
IF (orderType=1 OR orderType=2) AND cid IS NULL THEN
	SET goMoney = 0;
	LEAVE soone_pro;
END IF;

IF rate IS NOT NULL THEN
	SET oRate = rate;
END IF;

SET theFlag = locate('|', goods);
SET leaInfo = goods;
SET AUTOCOMMIT = 0;
soone_loop:WHILE(theFlag >= 0) do
	SET gInfo = SUBSTRING_INDEX(leaInfo, '|', 1);
	SET gid = SUBSTRING_INDEX(gInfo, ',', 1);
	SET gNum = SUBSTRING_INDEX(gInfo, ',', -1);

	SELECT gl_mprice, gl_leaves, gl_isspec, gl_name INTO gp, gl, gi, gn FROM xgm_goodlib WHERE gl_id = gid FOR UPDATE;
	IF gl < gNum THEN
		SET goMoney = 0;
		LEAVE soone_pro;
	END IF;

	IF gi = 1 THEN
		SET allPrice = allPrice+(gp*gNum);
	ELSE
		SET allPrice = allPrice+(gp*gNum*(100-oRate));
	END IF;

	UPDATE xgm_goodlib SET gl_leaves = gl_leaves-gNum WHERE gl_id = gid;
	INSERT INTO xgm_goinfo SET gl_id = gid, goi_nums = gNum, gl_name = gn, go_order = orderNo; 

	IF theFlag = 0 THEN
		LEAVE soone_loop;
	END IF;
	SET leaInfo = SUBSTRING(leaInfo, theFlag+1);
	SET theFlag = locate('|', leaInfo);
	SET gInfo = NULL;
	SET gid = 0;
	SET gNum = 0;
	SET gp = NULL;
	SET gl = NULL;
	SET gi = NULL;
	SET gn = NULL;
END WHILE soone_loop;

IF orderType=1 OR orderType=2 THEN
	IF cid IS NULL THEN
		SET goMoney = 0;
		ROLLBACK;
		LEAVE soone_pro;
	END IF;
	
	SELECT cl_state, cl_expire, ci_balance INTO cls, cle, cia FROM xgm_cardlib WHERE cl_id = cid FOR UPDATE;
	IF cls = 0 OR cle < now() OR cia = 0 THEN
		SET goMoney = 0;
		ROLLBACK;
		LEAVE soone_pro;
	END IF;

	IF orderType = 1 OR (orderType = 2 AND allPrice > cia) THEN
		UPDATE xgm_cardlib SET ci_balance = 0 WHERE cl_id = cid;
	ELSEIF orderType = 2 THEN
		UPDATE xgm_cardlib SET ci_balance = ci_balance - allPrice WHERE cl_id = cid;
	END IF;
ELSE
	SET cid = 0;
END IF;

INSERT INTO xgm_goodorder SET ou_id = uid, go_order = orderNo, go_date = now(), go_status = 1, cl_id = cid, go_type = orderType, go_allprice = allPrice, go_rate = oRate, go_smark = smark, go_fmark = fmark, go_mark = gmark, go_mtype = gt, go_omark = omark, ou_phone = phone, ou_truename = tname, ou_oneaddress = oneAdd, go_sdate = sdate;

IF orderType = 3 THEN
	UPDATE xgm_orderuser SET ou_total = ou_total + allPrice WHERE ou_id = uid;
END IF;

IF @@ERROR_COUNT > 0 OR allPrice <= 0  OR goMoney = 0 THEN
	SET goMoney = 0;
	ROLLBACK;
ELSE
    SET goMoney = allPrice;
	COMMIT;
END IF;
END soone_pro;


create procedure goBackPro (IN orderNo varchar(25), IN backNums text, OUT tReturn tinyint)
soone_pro:BEGIN

DECLARE ges TINYINT DEFAULT 0;
DECLARE theFlag int DEFAULT 0;
DECLARE leaInfo varchar(255);
DECLARE gInfo varchar(20);
DECLARE gNum int DEFAULT 0;
DECLARE gid int;

SELECT ge_status INTO ges FROM xgm_goodexception WHERE go_order = orderNo LIMIT 1 FOR UPDATE;
IF ges = 1 THEN
	SET tReturn = 0;
END IF;

SET theFlag = locate('|', backNums);
SET leaInfo = backNums;
SET AUTOCOMMIT = 0;
soone_loop:WHILE(theFlag >= 0) do
	SET gInfo = SUBSTRING_INDEX(leaInfo, '|', 1);
	SET gid = SUBSTRING_INDEX(gInfo, ',', 1);
	SET gNum = SUBSTRING_INDEX(gInfo, ',', -1);

	UPDATE xgm_goodin SET gl_leaves = gl_leaves + gNum WHERE gi_id = gid;

	IF theFlag = 0 THEN
		LEAVE soone_loop;
	END IF;
	SET leaInfo = SUBSTRING(leaInfo, theFlag+1);
	SET theFlag = locate('|', leaInfo);
	SET gInfo = NULL;
	SET gid = 0;
	SET gNum = 0;
END WHILE soone_loop;

UPDATE xgm_goodexception SET ge_content=backNums, ge_date=now(), ge_status=1 WHERE go_order = orderNo;

IF @@ERROR_COUNT > 0 OR tReturn = 0 THEN
	SET tReturn = 0;
	ROLLBACK;
ELSE
	SET tReturn = 1;
	COMMIT;
END IF;
END soone_pro;


create procedure outOrder (IN orderNo varchar(25), IN goods varchar(255), IN cp int, IN yc int, IN omark text, OUT goMoney int)
soone_pro:BEGIN
DECLARE oid INT DEFAULT NULL;
DECLARE gInfo VARCHAR(255);
DECLARE gid INT;
DECLARE gNum INT;
DECLARE gl INT;
DECLARE theFlag TINYINT;
DECLARE sender varchar(20) DEFAULT NULL;
DECLARE car varchar(20) DEFAULT NULL;
DECLARE leaInfo varchar(800);
DECLARE gOutInfo text DEFAULT NULL;
DECLARE gOutId INT;
DECLARE gOutProdate date;
DECLARE gOutTemp text DEFAULT NULL;
DECLARE gn varchar(30);

SELECT go_id INTO oid FROM xgm_goodorder WHERE go_order = orderNo AND go_status = 1 LIMIT 1 FOR UPDATE;
IF(oid IS NULL) THEN
    SET goMoney = 0;
	LEAVE soone_pro;
END IF;

SET theFlag = locate('|', goods);
SET leaInfo = goods;
SET AUTOCOMMIT = 0;
soone_loop:WHILE(theFlag >= 0) do
	SET gInfo = SUBSTRING_INDEX(leaInfo, '|', 1);
	SET gid = SUBSTRING_INDEX(gInfo, ',', 1);
	SET gNum = SUBSTRING_INDEX(gInfo, ',', -1);

	SELECT gl_leaves, gl_prodate, gl_name INTO gl, gOutProdate, gn FROM xgm_goodin WHERE gi_id = gid FOR UPDATE;

	IF gl < gNum THEN
		SET goMoney = 0;
		SET gOutInfo = NULL;
		LEAVE soone_pro;
	END IF;

	SET gOutTemp = gOutInfo;
	SET gOutInfo = CONCAT_WS('|', gOutTemp, CONCAT_WS(',', gid, gn, gOutProdate, gNum));
	UPDATE xgm_goodin SET gl_leaves = gl_leaves-gNum WHERE gi_id = gid;

	IF theFlag = 0 THEN
		LEAVE soone_loop;
	END IF;
	SET leaInfo = SUBSTRING(leaInfo, theFlag+1);
	SET theFlag = locate('|', leaInfo);
	SET gInfo = NULL;
	SET gid = 0;
	SET gNum = 0;
	SET gl = NULL;
	SET gOutProdate = NULL;
	SET gOutTemp = NULL;
END WHILE soone_loop;

SELECT car_no INTO car FROM xgm_car WHERE car_id = cp LIMIT 1;
IF(car IS NOT NULL) THEN
	UPDATE xgm_goodorder SET go_omark = omark, car_no = car, car_id = cp, go_sendmoney = yc, go_status = 6, go_outinfomark = gOutInfo WHERE go_order = orderNo AND go_status = 1;
	SET goMoney = 1;
ELSE
	SET goMoney = 0;
END IF;

IF @@ERROR_COUNT > 0 OR goMoney = 0 THEN
	SET goMoney = 0;
	ROLLBACK;
ELSE
	COMMIT;
END IF;
END soone_pro;


create procedure wrongOrder (IN wType tinyint, IN orderNo varchar(25), IN wrongNo varchar(25), IN okNums text, OUT tReturn tinyint)
soone_pro:BEGIN

DECLARE gId INT;
DECLARE gNums INT;
DECLARE theFlag int DEFAULT 0;
DECLARE leaInfo varchar(255);
DECLARE gInfo varchar(20);
DECLARE okGid INT;
DECLARE okGnum INT;
DECLARE gp int DEFAULT 0;
DECLARE gl int DEFAULT 0;
DECLARE gi tinyint;
DECLARE gn varchar(30);
DECLARE oRate int DEFAULT 0;
DECLARE done INT DEFAULT 0;
DECLARE cur3 CURSOR FOR SELECT gl_id, goi_nums FROM xgm_goinfo WHERE go_order = orderNo;
DECLARE CONTINUE HANDLER FOR SQLSTATE '02000' SET done = 1;

SET AUTOCOMMIT = 0;
IF (wType=3) THEN
	OPEN cur3;
	REPEAT
		FETCH cur3 INTO gId, gNums;
		IF NOT done THEN
			UPDATE xgm_goodlib SET gl_leaves = gl_leaves+gNums WHERE gl_id = gId;
			DELETE FROM xgm_goinfo WHERE go_order = orderNo AND gl_id = gId;
		END IF;
	UNTIL done END REPEAT;
	UPDATE xgm_goodorder SET go_status = 3 WHERE go_order = orderNo;
	SET tReturn = 1;
	CLOSE cur3;
	SET done = 0;
END IF;

IF (wType=1) THEN
	SELECT go_rate INTO oRate FROM xgm_goodorder WHERE go_order = orderNo LIMIT 1 FOR UPDATE;
	UPDATE xgm_goodorder SET go_status = 3 WHERE go_order = orderNo;
	INSERT INTO xgm_goodorder SET go_order=wrongNo, go_omark=orderNo, go_date=now(), go_status=2;

	SET theFlag = locate('|', okNums);
	SET leaInfo = okNums;
	soone_loop:WHILE(theFlag >= 0) do
		SET gInfo = SUBSTRING_INDEX(leaInfo, '|', 1);
		SET okGid = SUBSTRING_INDEX(gInfo, ',', 1);
		SET okGnum = SUBSTRING_INDEX(gInfo, ',', -1);

		SELECT gl_mprice, gl_leaves, gl_isspec, gl_name INTO gp, gl, gi, gn FROM xgm_goodlib WHERE gl_id = okGid FOR UPDATE;
		IF gl < okGnum THEN
			SET tReturn = 0;
			LEAVE soone_pro;
		END IF;

		INSERT INTO xgm_goinfo SET gl_id = okGid, goi_nums = okGnum, gl_name = gn, go_order = wrongNo; 

		IF theFlag = 0 THEN
			LEAVE soone_loop;
		END IF;
		SET leaInfo = SUBSTRING(leaInfo, theFlag+1);
		SET theFlag = locate('|', leaInfo);
		SET gInfo = NULL;
		SET okGid = 0;
		SET okGnum = 0;
		SET gp = NULL;
		SET gl = NULL;
		SET gi = NULL;
		SET gn = NULL;
	END WHILE soone_loop;
	INSERT INTO xgm_goodexception SET go_order = orderNo, ge_type = 1, ge_cdate=now();
	SET tReturn = 1;
END IF;

IF (wType=2) THEN
	UPDATE xgm_goodorder SET go_status = 3 WHERE go_order = orderNo;
	INSERT INTO xgm_goodexception SET go_order = orderNo, ge_type = 2, ge_cdate=now();
	SET tReturn = 1;
END IF;

IF @@ERROR_COUNT > 0 OR tReturn = 0 THEN
	SET tReturn = 0;
	ROLLBACK;
ELSE
	SET tReturn = 1;
	COMMIT;
END IF;
END soone_pro;

