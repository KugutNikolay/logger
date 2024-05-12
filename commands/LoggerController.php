<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class LoggerController extends Controller
{
	public function actionLog()
	{
		Yii::$app->logger->send("Logging message...");
	}

	public function actionLogTo(string $type)
	{
		Yii::$app->logger->setDriver($type);
		Yii::$app->logger->send("Logging message to $type...");
	}

	public function actionLogToAll()
	{
		$drivers = Yii::$app->logger->loggerDrivers;

		foreach ($drivers as $driver => $config) {
			Yii::$app->logger->setDriver($driver);
			Yii::$app->logger->send("Logging message to $driver...");
		}
	}
}
