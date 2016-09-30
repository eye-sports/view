<?php

namespace Agreed\Notification;

use Support\Accessibility\Accessible;

abstract class Notification
{
	use Accessible;

	protected $message = '';
	protected $status = 'information';

	public function __toString ( )
	{
		return $this->message;
	}
}