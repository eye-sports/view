<?php

namespace Agreed\Notifications\Sports\Exercise;

use Agreed\Notification\Notification;
use Agreed\Sports\Exercise;

class Added extends Notification
{
	protected $message = 'Succesfully created exercise';
	protected $status = 'success';

	public function __invoke ( Exercise $exercise ) : Added
	{
		$this->message = "Succesfully created exercise: $exercise->name";
		return $this;
	}
}