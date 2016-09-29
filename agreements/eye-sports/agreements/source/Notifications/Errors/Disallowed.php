<?php

namespace Notifications\Errors;

use Notification\Notification;

class Disallowed extends Notification
{
	protected $message = 'You are disallowed to access this page';
}