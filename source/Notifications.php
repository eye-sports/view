<?php

namespace View;

use IteratorAggregate;
use ArrayIterator;

class Notifications implements IteratorAggregate
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