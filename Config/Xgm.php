<?php
$pConfig['db'] = array(
	array(
		'type' => 'Mysql',
		'option' => array(
			'dbHost' => 'localhost',
			'dbPort' => 3389,
			'dbName' => 'xgm',
			'dbUser' => 'root',
			'dbPass' => '123456',
		)
	),
);
$pConfig['cacheDb'] = array(
	array(
		'cdbHost' => 'localhost',
		'cdbPort' => 12289,
	),
);

$pConfig['router'] = array(
	'type' => 1,
	'defControl' => 'user',
	'defAction' => 'index',
);

$pConfig['view'] = array(
	'type' => 'Smarty',
	'rDir' => 'template/default/',
	'conf' => array(
		'force_compile' => 1,
		'compile_check' => 1,
		'compile_dir' => PROJECT_ROOT . './Cache/tpl_c/',
		'caching' => 0,
		'force_cache' => 1,
		'cache_dir' => PROJECT_ROOT . './Cache/tpl_c/',
		'template_dir' => PROJECT_ROOT . './Www/template/default/',
		'left_delimiter' => '<!--{',
		'right_delimiter' => '}-->',
	),
	'suffix' => '.tpl',
);

$pConfig['tmp'] = PROJECT_ROOT . './Cache/tmp/';

$pConfig['oGood'] = array(16, 17);
