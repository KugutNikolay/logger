<?php
return [
	'class' => app\components\logger\Logger::class, // Specifies the class for the logger component
	'defaultDriver' => 'file', // Sets the default driver for logging
	'loggerDrivers' => [ // Defines different logger drivers
		'file' => app\components\logger\drivers\FileDriver::class, // File logging driver
		'db' => app\components\logger\drivers\DataBaseDriver::class, // Database logging driver
		'email' => [ // Email logging driver configuration
			'class' => app\components\logger\drivers\EmailDriver::class, // Email logging driver class
			'email' => 'test@test.com' // Email address for logging
		]
	]
];