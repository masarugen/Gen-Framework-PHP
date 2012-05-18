<?php
// DBへの接続
function db_connect($config) {
	$pdo = new PDO($config['db_dns'], $config['db_user'], $config['db_password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	return $pdo;
}

