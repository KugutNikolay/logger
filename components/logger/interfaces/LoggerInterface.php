<?php

namespace app\components\logger\interfaces;


interface LoggerInterface
{
	/**
	 *	Sends message to current logger.
	 *
	 *	@param string $message
	 *
	 *	@return void
	 */
	public function send(string $message): void;

	/**
	 *	Sends message by selected logger.
	 *
	 *	@param string $message
	 *	@param string $driver
	 *
	 *	@return void
	 *  @throws \Exception
	 */
	public function sendByLogger(string $message, string $driver): void;

	/**
	 *	Gets current logger driver.
	 *
	 *	@return DriverInterface
	 */
	public function getDriver(): DriverInterface;

	/**
	 *	Sets current logger driver.
	 *
	 *	@param string $driver
	 */
	public function setDriver(string $driver): void;
}
