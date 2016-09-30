<?php

namespace View;

use Agreed\Technical\Client\Session;
use Agreed\Notification\Notification;

class Notifier implements \Agreed\Notification\Notifier
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