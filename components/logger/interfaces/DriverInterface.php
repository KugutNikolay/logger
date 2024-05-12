<?php

namespace app\components\logger\interfaces;


interface DriverInterface
{
	/**
	 *	Sends message to logger.
	 *
	 *	@param string $message
	 *
	 *	@return void
	 */
	public function send(string $message): void;

}
