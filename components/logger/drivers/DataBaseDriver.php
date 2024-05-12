<?php

namespace  app\components\logger\drivers;

use app\components\logger\interfaces\DriverInterface;
use Yii;

class DataBaseDriver extends \yii\base\BaseObject  implements DriverInterface
{

	public function send(string $message): void
	{
		echo Yii::t('app', '"{message}" was sent via db', ['message' => $message]) . PHP_EOL;
	}
}