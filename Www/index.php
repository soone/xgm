<?php
//PHP 的 DIRECTORY_SEPARATOR（目录分隔符），Linux中是"/"，Windows中是"\"。
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . '/media/work_study/work/soone');
define('PROJECT_ROOT', dirname(dirname(__FILE__)) . '/');//项目地址
define('PROJECT_NAME', 'Xgm');//项目名称
define('RELEASE', 0);//项目是否发布
require_once 'N8/N8.php';
$n8 = new N8;
$n8->init()->run();
