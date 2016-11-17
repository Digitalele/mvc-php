<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule(); //capsule istance

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'username' => 'lele92',
	'password' => 'lele',
	'database' => 'mydb',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
	]);

$capsule->bootEloquent();

