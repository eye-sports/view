<?php

namespace Agreed\Sports;

use Support\Arrays\Looper;

class Exercises extends Looper
{
	private $elements = array ( );

	public function __construct ( array $elements = array ( ) )
	{
		foreach ( $elements as $element )
			$this->add ( $element );
	}

	/**
	 * Select all exercises to be looped by the looper.
	 * 
	 * @return Sports\Exercises 	The instance itself so you can loop over it.
	 */	
	public function all ( )
	{
		$this->loop ( $this->elements );
		return $this;
	}

	/**
	 * Add an exercise to this exercises collection.
	 * 
	 * @param Exercise $exercise 	The exercise to add to the collection.
	 */
	public function add ( Exercise $exercise )
	{
		$this->elements [ $exercise->name ] = $exercise;
	}
}