<?php

function dir_url(){
	$path = sprintf(
		"%s://%s%s",
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		$_SERVER['REQUEST_URI']
	);

	$dir = preg_replace('/\/(?:.(?!\/))+$/', '', $path);
	return $dir; 
}

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'password');
define('MYSQL_DATABASE', 'database');
define('URL_SHORTENER_TABLE_NAME', 'url_shortener');

define('DEFAULT_URL', dir_url() . '/default');

?>
