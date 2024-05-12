<?php

namespace app\components\logger;

use Exception;
use app\components\logger\drivers\FileDriver;
use app\components\logger\interfaces\LoggerInterface;
use app\components\logger\interfaces\DriverInterface;
use Yii;
use yii\base\Component;


class Logger extends Component implements LoggerInterface
{
	public string $defaultDriver = 'file';

	public array $loggerDrivers = [
		'file' => FileDriver::class
	];

	private ?DriverInterface $driver = null;

	public function init()
	{
		$this->setDriver($this->defaultDriver);
	}

	public function sendByLogger(string $message, string $driver): void
	{
		$this->setDriver($driver);
		$this->send($message);
	}

	public function getDriver(): DriverInterface
	{
		return $this->driver;
	}

	public function setDriver(string $driver): void
	{
		if (!isset($this->loggerDrivers[$driver])) {
			throw new Exception('Logger not found');
		}

		$this->driver = Yii::createObject($this->loggerDrivers[$driver]);
	}

	public function send(string $message): void
	{
		$this->driver->send($message);
	}

}
