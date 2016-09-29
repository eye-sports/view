<?php

namespace Notification;

interface Notifier
{
	/**
	 * Show a notification
	 * 
	 * @param  notification $notification 	The notification to show
	 * @return void
	 */
	public function __invoke ( Notification $notification );
}