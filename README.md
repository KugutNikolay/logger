Example logger config:
<pre>
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
</pre>

Example Yii console config:

<pre>
$logger = require __DIR__ . '/../components/logger/config/logger.php'; // Loads the logger configuration
</pre>
and
<pre>
'components' => [
        'logger' => $logger, // Configures the logger component
        ....
    ],
</pre>

Logger invocation:

<pre>
Yii::$app->logger // Accesses the logger component
</pre>

**Check implementation of the test task**
<br>

Sends a log message to the default logger:
<pre>
php yii logger/log
</pre>

Sends a log message to a special logger (driver: 'file', 'db' or 'email'):
<pre>
php yii logger/log-to {driver}
</pre>

Sends a log message to all loggers
<pre>
php yii logger/log-to-all
</pre>
