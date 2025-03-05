<?php

namespace Resque\Job;

/**
 * @property array|null              $args
 * @property string|null             $queue
 * @property \Resque\JobHandler|null $job
 * @phpstan-require-extends \stdClass
 */
interface JobInterface
{
	/**
	 * @return bool
	 */
	public function perform();
}
