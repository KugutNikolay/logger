<?php

namespace app\components\logger\drivers;

use app\components\logger\interfaces\DriverInterface;
use Yii;

class FileDriver extends \yii\base\BaseObject implements DriverInterface
{

	public function send(string $message): void
	{
		echo Yii::t('app', '"{message}" was sent via file', ['message' => $message]) . PHP_EOL;
	}
}