/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2010-7-8 1:32:54                             */
/*==============================================================*/


drop table if exists xgm_car;

drop table if exists xgm_cardinfo;

drop table if exists xgm_cardlib;

drop table if exists xgm_cardorder;

drop index cnameemail on xgm_carduser;

drop table if exists xgm_carduser;

drop table if exists xgm_cardview;

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
   car_status           tinyint not null comment '1-可用，2-不可用',
   car_adddate          datetime not null,
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
   ci_type              tinyint not null comment '1-为储值卡，3-为储物卡',
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
type = MYISAM;

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
   cview_name          varchar(20) not null,
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
/* Table: xgm_goinfo                                            */
/*==============================================================*/
create table xgm_goinfo
(
   go_id                int,
   gl_id                int,
   goi_nums             int not null default 0,
   gl_name              varchar(30) not null
)
type = MYISAM;

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
   primary key (ge_id)
)
type = MYISAM;

/*==============================================================*/
/* Table: xgm_goodin                                            */
/*==============================================================*/
create table xgm_goodin
(
   gi_id                int not null auto_increment,
   sp_id                int,
   gl_edate             datetime not null,
   gl_inprice           varchar(10) not null,
   gl_adprice           varchar(10) not null,
   gl_nums              int not null default 0,
   gl_order             varchar(20) not null,
   sp_name              varchar(50) not null,
   gl_date              datetime not null,
   gl_state             tinyint not null default 1 comment '1-可用，0-不可用 ',
   gl_leaves            int not null default 0 comment '出库后剩余数量',
   gl_name              varchar(30) not null,
   primary key (gi_id)
)
type = MYISAM;

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
type = MYISAM;

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
   ou_username          varchar(20) not null,
   go_status            tinyint not null comment '1-未配送，2-配送完成，3-作废，4-退货，5-换货',
   cl_id                int not null,
   go_sdate             datetime not null,
   go_mtype             tinyint not null comment '1-司机代收，2-支付宝，3-其他',
   go_mark              text not null,
   s_sender             varchar(20) not null,
   s_id                 int not null,
   car_no               varchar(10) not null,
   car_id               int not null,
   go_sendmoney         varchar(10) not null,
   go_type              tinyint not null comment '1-储物卡订单，2-储值卡订单，3-零散配送单，4-补送配送单，5-投诉补送',
   ou_truename          varchar(20) not null,
   ou_oneaddress        text not null comment '序列化的收货人信息',
   go_mtmark            varchar(120) not null,
   go_allprice          varchar(8) not null,
   go_oprice            varchar(8) not null,
   primary key (go_id)
)
type = MYISAM;

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
type = MYISAM;

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
