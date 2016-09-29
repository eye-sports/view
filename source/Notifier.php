<?php

namespace View;

use Agreed\Client\Session;
use Notification\Notification;

class Notifier implements \Notification\Notifier
{
	private $session = null;

	public function __construct ( Session $session )
	{
		$this->session = $session;
	}

	public function __invoke ( Notification $notification )
	{
		$notifications = $this->session->flashed ( 'notifications', array ( ) );
		$notifications [ ] = $notification;
		$this->session->flash ( 'notifications', array ( $notifications ) );
	}
}