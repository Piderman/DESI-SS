<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => 'root',
	"database" => 'desi',
	"path" => '',
);


require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

ini_set("error_log", "failboat.txt");
