<?php

namespace Resque\Job;

/**
 * @property array $args
 * @property string $queue
 */
interface JobInterface
{
	/**
	 * @return bool
	 */
	public function perform();
}
