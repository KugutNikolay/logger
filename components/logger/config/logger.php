<?php
return [
	'class' => app\components\logger\Logger::class,
	'defaultDriver' => 'file',
	'loggerDrivers' => [
		'file' => app\components\logger\drivers\FileDriver::class,
		'db' => app\components\logger\drivers\DataBaseDriver::class,
		'email' => [
			'class' => app\components\logger\drivers\EmailDriver::class,
			'email' => 'test@test.com'
		]
	]
];