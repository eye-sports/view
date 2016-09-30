<?php

namespace Agreed\Notifications\Errors;

use Agreed\Notification\Notification;

class Disallowed extends Notification
{
	protected $message = 'You are disallowed to access this page';
}