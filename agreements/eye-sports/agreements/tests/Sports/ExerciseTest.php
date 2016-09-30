<?php

namespace Agreed\Sports\Tests;

use Agreed\Sports\Exercise;
use Testing\TestCase;

class ExerciseTest extends TestCase
{
	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 * @dataProvider  nonStringValues
	 */
	public function __construct_withNonStringValueForName_throwsException ( $value )
	{
		$exercise = new Exercise ( $value );
	}

	/**
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	public function __construct_withEmptyStringValueForName_throwsException ( )
	{
		$exercise = new Exercise ( '' );
	}

	/**
	 * @test
	 */
	public function __construct_withStringForName_setsNameLowerCasedOnExercise ( )
	{
		$name = 'BenCh Press';
		$exercise = new Exercise ( $name );
		assertThat ( $exercise->name, is ( identicalTo ( strtolower ( $name ) ) ) );	
	}
}