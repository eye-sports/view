<?php

namespace View;

use ArrayIterator;

class Notifications
{
	private $notifications = array ( );

	public function __construct ( array $notifications = array ( ) )
	{
		$this->notifications = $notifications;
	}

	public function getIterator ( ) : ArrayIterator
	{
		return new ArrayIterator ( $this->notifications );
	}
}