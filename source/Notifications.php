<?php

namespace View;

use Agreed\Client\Session;
use ArrayIterator;

class Notifications extends \Facades\View\Notifications
{
	private $session = null;

	public function __construct ( Session $session )
	{
		$this->session = $session;
	}

	public function getIterator ( ) : ArrayIterator
	{
		return new ArrayIterator ( $this->session->flashed ( 'notifications', array ( ) ) );
	}
}