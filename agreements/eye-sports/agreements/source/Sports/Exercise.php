<?php

namespace Sports;

use InvalidArgumentException;
use Support\Accessibility\Accessible;

class Exercise
{
	use Accessible;
	
	private $name = '';

	public function __construct ( $name )
	{
		if ( ! is_string ( $name ) or empty ( $name ) )
			throw new InvalidArgumentException ( '$name must be a non empty string' );
		$this->name = strtolower ( $name );
	}
}