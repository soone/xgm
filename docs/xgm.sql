/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2010-5-19 23:16:07                           */
/*==============================================================*/


drop table if exists xgm_cardinfo;

drop table if exists xgm_cardlib;

drop table if exists xgm_cardorder;

drop table if exists xgm_carduser;

drop table if exists xgm_cardview;

drop table if exists xgm_goinfo;

drop table if exists xgm_goodcat;

drop table if exists xgm_goodexception;

drop table if exists xgm_goodin;

drop table if exists xgm_goodlib;

drop table if exists xgm_goodorder;

drop table if exists xgm_orderuser;

drop table if exists xgm_supplier;

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
);

/*==============================================================*/
/* Table: xgm_cardlib                                           */
/*==============================================================*/
create table xgm_cardlib
(
   ci_id                int,
   cl_id                int not null auto_increment,
   cd_id                int,
   cl_num               varchar(12) not null,
   cl_date              datetime not null,
   cl_state             tinyint not null default 1 comment '1-为可用，0-为不可用',
   cl_otime             datetime not null,
   cl_expire            datetime not null,
   ci_money             varchar(10) not null,
   ci_balance           varchar(10) not null default '0',
   primary key (cl_id)
);

/*==============================================================*/
/* Table: xgm_cardorder                                         */
/*==============================================================*/
create table xgm_cardorder
(
   co_id                int not null auto_increment,
   cu_id                int,
   co_order             varchar(20) not null,
   co_totalnums         int not null default 0,
   co_start             varchar(20) not null,
   co_end               varchar(20) not null,
   co_total             varchar(10) not null,
   co_ava               varchar(20) not null,
   co_text              text not null comment '序列化的存放每种卡的名称，每种卡的数量，以及卡的单价',
   co_invoice           varchar(255) not null comment '为空则不需要发票',
   co_mark              text,
   co_ctime             datetime not null,
   co_otime             datetime not null,
   primary key (co_id)
);

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
);

/*==============================================================*/
/* Table: xgm_goinfo                                            */
/*==============================================================*/
create table xgm_goinfo
(
   go_id                int,
   gl_id                int,
   goi_nums             int not null default 0,
   gl_name              varchar(30) not null
);

/*==============================================================*/
/* Table: xgm_goodcat                                           */
/*==============================================================*/
create table xgm_goodcat
(
   gc_id                int not null auto_increment,
   gc_name              varchar(20) not null,
   gc_time              datetime not null,
   primary key (gc_id)
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
);

/*==============================================================*/
/* Table: xgm_goodin                                            */
/*==============================================================*/
create table xgm_goodin
(
   gi_id                int not null auto_increment,
   gl_id                int,
   gl_w                 varchar(10) not null,
   gl_net               varchar(10) not null,
   gl_edate             datetime not null,
   gl_inprice           varchar(10) not null,
   gl_adprice           varchar(10) not null,
   gl_nums              int not null default 0,
   gl_order             varchar(20) not null,
   sp_name              varchar(50) not null,
   gl_date              datetime not null,
   gl_state             tinyint not null default 1 comment '1-可用，',
   primary key (gi_id)
);

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
   gl_mprice            varchar(10) not null,
   gl_warn              varchar(10) not null default '0',
   gl_warnper           tinyint not null comment '1-数量，2-重量',
   gl_mark              text,
   primary key (gl_id)
);

/*==============================================================*/
/* Table: xgm_goodorder                                         */
/*==============================================================*/
create table xgm_goodorder
(
   go_id                int not null auto_increment,
   ou_id                int,
   go_order             varchar(20) not null,
   go_date              datetime not null,
   ou_username          varchar(20) not null,
   go_status            tinyint not null,
   primary key (go_id)
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
   primary key (ou_id)
);

/*==============================================================*/
/* Table: xgm_supplier                                          */
/*==============================================================*/
create table xgm_supplier
(
   sp_id                int not null auto_increment,
   gi_id                int,
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
);
