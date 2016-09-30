<?php

namespace Agreed\Notifications\Greetings;

use Agreed\Notification\Notification;
use Agreed\Persons\Person;

class Greeting extends Notification
{
	protected $message = 'welcome';

	/**
	 * Bind a personal name to the greeting message
	 * 
	 * @param  person $person 						The person who's name to add to the message
	 * @return notifications\greetings\greeting     The instance itself
	 */
	public function for ( Person $person ) : Greeting
	{
		$this->message .= ' ' . $person->name;
		return $this;
	}
}