<?php

namespace app\components\logger\drivers;

use app\components\logger\interfaces\DriverInterface;
use Yii;

class EmailDriver extends \yii\base\BaseObject  implements DriverInterface
{

	public string $email = '';

	public function send(string $message): void
	{
		echo Yii::t('app', '"{message}" was sent via email {email}', ['message' => $message, 'email' => $this->email]) . PHP_EOL;
	}
}