<?php
$pConfig['view'] = '';
$pConfig['db'] = array(
	array(
		'dbHost' => 'localhost',
		'dbPort' => 3389,
		'dbName' => 'xgm',
		'dbUser' => 'root',
		'dbPass' => '123456',
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
